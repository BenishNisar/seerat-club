<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('content_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('page', 80)->index();
            $table->string('block_key', 120);
            $table->string('label', 150)->nullable();
            $table->string('title', 255)->nullable();
            $table->text('subtitle')->nullable();
            $table->longText('body')->nullable();
            $table->string('image_path')->nullable();
            $table->string('link_text', 120)->nullable();
            $table->string('link_url')->nullable();
            $table->json('metadata')->nullable();
            $table->unsignedSmallInteger('sort_order')->default(0)->index();
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
            $table->unique(['page', 'block_key']);
            $table->index(['page', 'is_active', 'sort_order']);
        });

        Schema::create('volunteer_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->index();
            $table->string('email')->index();
            $table->string('phone', 40)->index();
            $table->string('support_type', 120)->nullable()->index();
            $table->text('message')->nullable();
            $table->string('status', 30)->default('new')->index();
            $table->text('admin_notes')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamp('last_contacted_at')->nullable()->index();
            $table->timestamps();
            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('volunteer_submissions');
        Schema::dropIfExists('content_blocks');
    }
};
