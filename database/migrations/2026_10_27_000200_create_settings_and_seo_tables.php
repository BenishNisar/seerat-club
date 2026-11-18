<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('website_settings', function (Blueprint $table) {
            $table->id();
            $table->string('group', 60)->default('general')->index();
            $table->string('key', 120)->unique();
            $table->longText('value')->nullable();
            $table->string('type', 30)->default('text');
            $table->boolean('is_public')->default(true)->index();
            $table->timestamps();
        });

        Schema::create('page_seo', function (Blueprint $table) {
            $table->id();
            $table->string('page_key', 120)->unique();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('og_image_path')->nullable();
            $table->string('robots', 80)->default('index,follow');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_seo');
        Schema::dropIfExists('website_settings');
    }
};
