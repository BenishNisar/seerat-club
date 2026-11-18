<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MediaItem extends Model
{
    protected $fillable = [
        'uploaded_by', 'collection', 'disk', 'path', 'original_name',
        'mime_type', 'size_bytes', 'width', 'height', 'alt_text',
    ];
}
