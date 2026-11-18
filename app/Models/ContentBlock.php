<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ContentBlock extends Model
{
    protected $fillable = [
        'page', 'block_key', 'label', 'title', 'subtitle', 'body', 'image_path',
        'link_text', 'link_url', 'metadata', 'sort_order', 'is_active',
    ];

    protected function casts(): array
    {
        return [
            'metadata' => 'array',
            'is_active' => 'boolean',
        ];
    }

    /**
     * Do not cache Eloquent model collections here.
     * Serialized Eloquent collections can become __PHP_Incomplete_Class objects
     * after a deploy, Composer refresh, PHP restart, or project move.
     */
    public static function forPage(string $page): Collection
    {
        return static::query()
            ->where('page', $page)
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get()
            ->keyBy('block_key');
    }

    /**
     * Kept for backwards compatibility with the admin controller.
     * Page content is intentionally read directly from MySQL.
     */
    public static function clearPageCache(string $page): void
    {
        // No-op: ContentBlock Eloquent models are not serialized into cache.
    }
}
