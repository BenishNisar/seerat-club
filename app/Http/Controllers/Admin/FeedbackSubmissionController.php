<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FeedbackSubmission;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FeedbackSubmissionController extends Controller
{
    public function index(Request $request): View
    {
        $feedback = FeedbackSubmission::query()
            ->when($request->q, fn ($q, $term) => $q->where(fn ($x) => $x
                ->where('name', 'like', "%{$term}%")
                ->orWhere('email', 'like', "%{$term}%")
                ->orWhere('message', 'like', "%{$term}%")))
            ->when($request->status, fn ($q, $status) => $q->where('status', $status))
            ->latest()
            ->paginate(25)
            ->withQueryString();

        return view('admin.feedback.index', compact('feedback'));
    }

    public function show(FeedbackSubmission $feedback): View
    {
        if ($feedback->status === 'unread') {
            $feedback->update(['status' => 'read', 'read_at' => now()]);
        }

        return view('admin.feedback.show', compact('feedback'));
    }

    public function update(Request $request, FeedbackSubmission $feedback): RedirectResponse
    {
        $data = $request->validate([
            'status' => ['required', 'in:unread,read,reviewed,archived'],
            'admin_notes' => ['nullable', 'string', 'max:5000'],
        ]);

        if ($data['status'] !== 'unread' && ! $feedback->read_at) {
            $data['read_at'] = now();
        }

        $feedback->update($data);
        ActivityLogger::record('feedback.update', $feedback, 'Feedback submission updated');

        return back()->with('success', 'Feedback updated.');
    }

    public function destroy(FeedbackSubmission $feedback): RedirectResponse
    {
        ActivityLogger::record('feedback.delete', $feedback, 'Feedback submission deleted');
        $feedback->delete();

        return redirect()->route('admin.feedback.index')->with('success', 'Feedback deleted.');
    }
}
