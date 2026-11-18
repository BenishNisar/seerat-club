<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_cycles', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('slug', 120)->unique();
            $table->unsignedSmallInteger('sort_order')->default(0)->index();
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_cycle_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('title', 180);
            $table->string('slug', 190)->unique();
            $table->string('short_description', 500)->nullable();
            $table->longText('description')->nullable();
            $table->date('event_date')->nullable()->index();
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('location')->nullable();
            $table->string('registration_url')->nullable();
            $table->string('status', 30)->default('draft')->index();
            $table->boolean('is_past')->default(false)->index();
            $table->unsignedSmallInteger('sort_order')->default(0)->index();
            $table->string('hero_image_path')->nullable();
            $table->string('poster_image_path')->nullable();
            $table->string('presentation_url')->nullable();
            $table->string('video_url')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->text('seo_keywords')->nullable();
            $table->string('og_image_path')->nullable();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['status', 'event_date']);
            $table->index(['event_cycle_id', 'sort_order']);
        });

        Schema::create('event_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained()->cascadeOnDelete();
            $table->string('type', 30)->default('image')->index();
            $table->string('file_path');
            $table->string('title')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('mime_type', 100)->nullable();
            $table->unsignedBigInteger('size_bytes')->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0)->index();
            $table->timestamps();

            $table->index(['event_id', 'type', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_media');
        Schema::dropIfExists('events');
        Schema::dropIfExists('event_cycles');
    }
};
