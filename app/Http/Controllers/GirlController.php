<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\GirlsRegistration;
use App\Models\ContentBlock;
use Illuminate\Support\Facades\Schema;
use App\Services\FormNotificationService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class GirlController extends Controller
{
    public function index(): View
    {
        $pageContent = collect();
        try { if (Schema::hasTable('content_blocks')) $pageContent = ContentBlock::forPage('girls'); } catch (\Throwable) {}
        return view('Home.girls', compact('pageContent'));
    }

    public function store(StoreRegistrationRequest $request, FormNotificationService $notifications): RedirectResponse
    {
        $data = $request->validated();

        $duplicate = GirlsRegistration::query()
            ->where('email', $data['field_3'])
            ->where('child_name', $data['field_6'])
            ->where('created_at', '>=', now()->subMinutes(5))
            ->exists();

        if ($duplicate) {
            return back()->with('success', 'Your girls registration has already been received. Thank you.');
        }

        $registration = GirlsRegistration::create([
            'event_id' => $data['event_id'] ?? null,
            'parent_name' => $data['field_1'],
            'relationship' => $data['field_2'] ?? null,
            'email' => $data['field_3'],
            'phone' => $data['field_4'],
            'alternate_phone' => $data['field_5'] ?? null,
            'child_name' => $data['field_6'],
            'age_group' => $data['field_7'] ?? null,
            'date_of_birth' => $data['field_8'] ?? null,
            'gender' => $data['field_9'] ?? 'Female',
            'previous_participation' => $data['prev_participation'] ?? null,
            'area' => $data['field_13'] ?? null,
            'communication_method' => $data['comm_method'] ?? null,
            'emergency_contact_name' => $data['field_17'] ?? null,
            'emergency_contact_phone' => $data['field_18'] ?? null,
            'referral_source' => $data['field_19'] ?? null,
            'looking_forward_to' => $data['looking_forward'] ?? [],
            'additional_notes' => $data['field_26'] ?? null,
            'consent' => true,
            'status' => 'new',
            'payload' => $request->except(['_token']),
            'ip_address' => $request->ip(),
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        $notifications->send('girls_registration', $registration->toArray());

        return back()->with('success', 'Girls registration submitted successfully. JazakAllah khair.');
    }
}
