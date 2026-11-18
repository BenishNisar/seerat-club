<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FormSubmissionMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public string $submissionType,
        public array $submissionData,
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Seerat Club: '.ucwords(str_replace('_', ' ', $this->submissionType)).' submission',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.form-submission',
        );
    }
}
