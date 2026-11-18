<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVolunteerRequest;
use App\Models\VolunteerSubmission;
use App\Models\ContentBlock;
use Illuminate\Support\Facades\Schema;
use App\Services\FormNotificationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class VolunteerController extends Controller
{
    public function index(): View
    {
        $pageContent = collect();
        try { if (Schema::hasTable('content_blocks')) $pageContent = ContentBlock::forPage('volunteer'); } catch (\Throwable) {}
        return view('Home.volunteer', compact('pageContent'));
    }

    public function store(StoreVolunteerRequest $request, FormNotificationService $notifications): RedirectResponse
    {
        $data = $request->validated();

        $duplicate = VolunteerSubmission::query()
            ->where('phone', $data['phone'])
            ->where('created_at', '>=', now()->subMinutes(5))
            ->exists();

        if ($duplicate) {
            return back()->with('success', 'Your volunteer request has already been received. Thank you.');
        }

        $submission = VolunteerSubmission::create([
            ...$data,
            'status' => 'new',
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        $notifications->send('volunteer_submission', $submission->toArray());

        return back()->with('success', 'Thank you for offering your support. We will contact you soon.');
    }
}
