<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedbackSubmission extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'relationship', 'rating', 'topic',
        'message', 'permission_to_share', 'status', 'admin_notes',
        'ip_address', 'user_agent', 'read_at',
    ];

    protected function casts(): array
    {
        return [
            'permission_to_share' => 'boolean',
            'rating' => 'integer',
            'read_at' => 'datetime',
        ];
    }
}
