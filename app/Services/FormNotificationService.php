<?php

namespace App\Services;

use App\Mail\FormSubmissionMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class FormNotificationService
{
    public function send(string $type, array $data): void
    {
        $recipient = config('mail.forms_to')
            ?: config('mail.from.address');

        if (! $recipient) {
            return;
        }

        try {
            Mail::to($recipient)->send(new FormSubmissionMail($type, $data));
        } catch (\Throwable $exception) {
            Log::error('Form notification email failed.', [
                'type' => $type,
                'message' => $exception->getMessage(),
            ]);
        }
    }
}
