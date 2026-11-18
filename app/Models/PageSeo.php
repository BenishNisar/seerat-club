<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageSeo extends Model
{
    protected $table = 'page_seo';

    protected $fillable = [
        'page_key', 'title', 'description', 'keywords', 'canonical_url',
        'og_image_path', 'robots',
    ];

    /**
     * Keep the existing method name for compatibility, but deliberately avoid
     * serializing an Eloquent model into Laravel cache.
     */
    public static function cachedFor(string $pageKey): ?self
    {
        return static::query()
            ->where('page_key', $pageKey)
            ->first();
    }
}
