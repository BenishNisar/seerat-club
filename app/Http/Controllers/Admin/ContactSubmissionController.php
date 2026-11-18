<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactSubmissionController extends Controller
{
    public function index(Request $request): View
    {
        $contacts = ContactSubmission::query()
            ->when($request->q, fn ($q, $term) => $q->where(fn ($x) => $x
                ->where('name', 'like', "%{$term}%")
                ->orWhere('email', 'like', "%{$term}%")
                ->orWhere('subject', 'like', "%{$term}%")))
            ->when($request->status, fn ($q, $status) => $q->where('status', $status))
            ->latest()
            ->paginate(25)
            ->withQueryString();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(ContactSubmission $contact): View
    {
        if ($contact->status === 'unread') {
            $contact->update(['status' => 'read', 'read_at' => now()]);
        }

        return view('admin.contacts.show', compact('contact'));
    }

    public function update(Request $request, ContactSubmission $contact): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:unread,read,replied,archived'],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        if ($data['status'] !== 'unread' && ! $contact->read_at) {
            $data['read_at'] = now();
        }

        $contact->update($data);
        ActivityLogger::record('contact.update', $contact, 'Contact submission updated');

        return back()->with('success', 'Contact updated.');
    }

    public function destroy(ContactSubmission $contact): RedirectResponse
    {
        ActivityLogger::record('contact.delete', $contact, 'Contact submission deleted');
        $contact->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted.');
    }
}
