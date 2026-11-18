<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GirlsRegistration;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GirlsRegistrationController extends Controller
{
    public function index(Request $request): View
    {
        $registrations = GirlsRegistration::query()
            ->when($request->q, fn ($q, $term) => $q->where(fn ($x) => $x
                ->where('parent_name', 'like', "%{$term}%")
                ->orWhere('child_name', 'like', "%{$term}%")
                ->orWhere('email', 'like', "%{$term}%")
                ->orWhere('phone', 'like', "%{$term}%")))
            ->when($request->status, fn ($q, $status) => $q->where('status', $status))
            ->latest()
            ->paginate(25)
            ->withQueryString();

        return view('admin.girls.index', compact('registrations'));
    }

    public function show(GirlsRegistration $girlsRegistration): View
    {
        return view('admin.girls.show', compact('girlsRegistration'));
    }

    public function update(Request $request, GirlsRegistration $girlsRegistration): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:new,reviewing,contacted,approved,waitlisted,rejected,completed'],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        $girlsRegistration->update($data);
        ActivityLogger::record('girls-registration.update', $girlsRegistration, 'Girls registration updated');

        return back()->with('success', 'Girls registration updated.');
    }

    public function destroy(GirlsRegistration $girlsRegistration): RedirectResponse
    {
        ActivityLogger::record('girls-registration.delete', $girlsRegistration, 'Girls registration deleted');
        $girlsRegistration->delete();

        return redirect()->route('admin.girls.index')->with('success', 'Girls registration deleted.');
    }
}
