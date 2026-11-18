<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VolunteerSubmission extends Model
{
    protected $fillable = [
        'full_name', 'email', 'phone', 'support_type', 'message', 'status',
        'admin_notes', 'ip_address', 'user_agent', 'last_contacted_at',
    ];

    protected function casts(): array
    {
        return ['last_contacted_at' => 'datetime'];
    }
}
