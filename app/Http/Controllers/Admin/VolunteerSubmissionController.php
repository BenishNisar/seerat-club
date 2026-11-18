<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VolunteerSubmission;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VolunteerSubmissionController extends Controller
{
    public function index(Request $request): View
    {
        $items = VolunteerSubmission::query()
            ->when($request->q, function ($q, $term) {
                $q->where(function ($inner) use ($term) {
                    $inner->where('full_name', 'like', "%{$term}%")
                        ->orWhere('email', 'like', "%{$term}%")
                        ->orWhere('phone', 'like', "%{$term}%");
                });
            })
            ->when($request->status, fn ($q, $status) => $q->where('status', $status))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.volunteers.index', compact('items'));
    }

    public function show(VolunteerSubmission $volunteer): View
    {
        return view('admin.volunteers.show', compact('volunteer'));
    }

    public function update(Request $request, VolunteerSubmission $volunteer): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:new,contacted,approved,declined,closed'],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        if ($data['status'] === 'contacted' && ! $volunteer->last_contacted_at) {
            $data['last_contacted_at'] = now();
        }

        $volunteer->update($data);
        ActivityLogger::record('volunteer.update', $volunteer, 'Volunteer submission updated');

        return back()->with('success', 'Volunteer submission updated.');
    }

    public function destroy(VolunteerSubmission $volunteer): RedirectResponse
    {
        ActivityLogger::record('volunteer.delete', $volunteer, 'Volunteer submission deleted');
        $volunteer->delete();

        return redirect()->route('admin.volunteers.index')->with('success', 'Volunteer submission deleted.');
    }
}
