<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\ContactSubmission;
use App\Models\ContentBlock;
use Illuminate\Support\Facades\Schema;
use App\Services\FormNotificationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        $pageContent = collect();
        try { if (Schema::hasTable('content_blocks')) $pageContent = ContentBlock::forPage('contact'); } catch (\Throwable) {}
        return view('Home.contact', compact('pageContent'));
    }

    public function store(StoreContactRequest $request, FormNotificationService $notifications): RedirectResponse
    {
        $data = $request->validated();

        $submission = ContactSubmission::create([
            ...$data,
            'status' => 'unread',
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        $notifications->send('contact', $submission->toArray());

        return back()->with('success', 'Your message has been received. We will get back to you soon.');
    }
}
