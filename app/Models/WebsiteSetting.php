<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Schema;

class WebsiteSetting extends Model
{
    protected $fillable = ['group', 'key', 'value', 'type', 'is_public'];

    protected function casts(): array
    {
        return ['is_public' => 'boolean'];
    }

    public static function cached(): array
    {
        if (! Schema::hasTable('website_settings')) {
            return [];
        }

        return Cache::remember('website.settings.public', now()->addHour(), function () {
            return static::query()
                ->where('is_public', true)
                ->pluck('value', 'key')
                ->all();
        });
    }

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('website.settings.public'));
        static::deleted(fn () => Cache::forget('website.settings.public'));
    }
}
