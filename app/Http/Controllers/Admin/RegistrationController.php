<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Registration;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\StreamedResponse;

class RegistrationController extends Controller
{
    public function index(Request $request): View
    {
        $query = Registration::with('event')
            ->when($request->q, fn ($q, $term) => $q->where(fn ($x) => $x
                ->where('parent_name', 'like', "%{$term}%")
                ->orWhere('child_name', 'like', "%{$term}%")
                ->orWhere('email', 'like', "%{$term}%")
                ->orWhere('phone', 'like', "%{$term}%")))
            ->when($request->status, fn ($q, $status) => $q->where('status', $status))
            ->when($request->event_id, fn ($q, $event) => $q->where('event_id', $event))
            ->when($request->from, fn ($q, $from) => $q->whereDate('created_at', '>=', $from))
            ->when($request->to, fn ($q, $to) => $q->whereDate('created_at', '<=', $to))
            ->latest();

        return view('admin.registrations.index', [
            'registrations' => $query->paginate(25)->withQueryString(),
            'events' => Event::orderByDesc('event_date')->get(['id', 'title']),
        ]);
    }

    public function show(Registration $registration): View
    {
        return view('admin.registrations.show', compact('registration'));
    }

    public function update(Request $request, Registration $registration): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:new,reviewing,contacted,approved,waitlisted,rejected,completed'],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        $registration->update([
            ...$data,
            'last_contacted_at' => $data['status'] === 'contacted' ? now() : $registration->last_contacted_at,
        ]);

        ActivityLogger::record('registration.update', $registration, 'Registration status updated');

        return back()->with('success', 'Registration updated.');
    }

    public function destroy(Registration $registration): RedirectResponse
    {
        ActivityLogger::record('registration.delete', $registration, 'Registration deleted');
        $registration->delete();

        return redirect()->route('admin.registrations.index')->with('success', 'Registration deleted.');
    }

    public function export(Request $request): StreamedResponse
    {
        return response()->streamDownload(function () use ($request) {
            $out = fopen('php://output', 'w');
            fputcsv($out, ['ID', 'Parent', 'Child', 'Email', 'Phone', 'Age Group', 'Status', 'Submitted']);

            Registration::query()
                ->when($request->status, fn ($q, $status) => $q->where('status', $status))
                ->orderBy('id')
                ->chunk(500, function ($rows) use ($out) {
                    foreach ($rows as $row) {
                        fputcsv($out, [
                            $row->id, $row->parent_name, $row->child_name, $row->email,
                            $row->phone, $row->age_group, $row->status, $row->created_at?->toDateTimeString(),
                        ]);
                    }
                });

            fclose($out);
        }, 'seerat-registrations.csv', ['Content-Type' => 'text/csv']);
    }
}
