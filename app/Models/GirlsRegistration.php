<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GirlsRegistration extends Model
{
    protected $fillable = [
        'event_id', 'parent_name', 'relationship', 'email', 'phone',
        'alternate_phone', 'child_name', 'age_group', 'date_of_birth',
        'gender', 'previous_participation', 'area', 'communication_method',
        'emergency_contact_name', 'emergency_contact_phone', 'referral_source',
        'looking_forward_to', 'additional_notes', 'consent', 'status',
        'admin_notes', 'payload', 'ip_address', 'user_agent', 'last_contacted_at',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
            'looking_forward_to' => 'array',
            'payload' => 'array',
            'consent' => 'boolean',
            'last_contacted_at' => 'datetime',
        ];
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }
}
