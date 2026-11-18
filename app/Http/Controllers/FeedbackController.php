<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\FeedbackSubmission;
use App\Services\FormNotificationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class FeedbackController extends Controller
{
    public function index(): View
    {
        return view('Home.feedback');
    }

    public function store(StoreFeedbackRequest $request, FormNotificationService $notifications): RedirectResponse
    {
        $data = $request->validated();

        $feedback = FeedbackSubmission::create([
            ...$data,
            'permission_to_share' => $request->boolean('permission_to_share'),
            'status' => 'unread',
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        try {
            $notifications->send('feedback', $feedback->toArray());
        } catch (\Throwable) {
            // Feedback is already stored; notification failure must not block the user.
        }

        return back()->with('success', 'Thank you! Your feedback has been received.');
    }
}
