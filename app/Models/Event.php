<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'event_cycle_id', 'created_by', 'updated_by', 'title', 'slug',
        'short_description', 'description', 'event_date', 'start_time',
        'end_time', 'location', 'registration_url', 'status', 'is_past',
        'sort_order', 'hero_image_path', 'poster_image_path',
        'presentation_url', 'video_url', 'seo_title', 'seo_description',
        'seo_keywords', 'og_image_path', 'published_at',
    ];

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
            'published_at' => 'datetime',
            'is_past' => 'boolean',
        ];
    }

    public function cycle(): BelongsTo
    {
        return $this->belongsTo(EventCycle::class, 'event_cycle_id');
    }

    public function media(): HasMany
    {
        return $this->hasMany(EventMedia::class)->orderBy('sort_order');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function updater(): BelongsTo
    {
        return $this->belongsTo(User::class, 'updated_by');
    }
}
