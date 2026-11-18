<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->nullable()->index();
            $table->string('phone', 40)->nullable();
            $table->string('relationship', 40)->index();
            $table->unsignedTinyInteger('rating')->index();
            $table->string('topic')->nullable();
            $table->text('message');
            $table->boolean('permission_to_share')->default(false);
            $table->string('status', 30)->default('unread')->index();
            $table->text('admin_notes')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamp('read_at')->nullable()->index();
            $table->timestamps();
            $table->index(['status', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback_submissions');
    }
};
