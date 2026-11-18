<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->nullable()->constrained()->nullOnDelete();
            $table->string('parent_name');
            $table->string('relationship', 60)->nullable();
            $table->string('email')->index();
            $table->string('phone', 40)->index();
            $table->string('alternate_phone', 40)->nullable();
            $table->string('child_name')->index();
            $table->string('age_group', 60)->nullable()->index();
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 30)->nullable()->index();
            $table->string('previous_participation', 30)->nullable();
            $table->string('area', 100)->nullable()->index();
            $table->string('communication_method', 30)->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone', 40)->nullable();
            $table->string('referral_source', 100)->nullable();
            $table->json('looking_forward_to')->nullable();
            $table->text('additional_notes')->nullable();
            $table->boolean('consent')->default(false);
            $table->string('status', 30)->default('new')->index();
            $table->text('admin_notes')->nullable();
            $table->json('payload')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamp('last_contacted_at')->nullable()->index();
            $table->timestamps();

            $table->index(['status', 'created_at']);
            $table->index(['event_id', 'status']);
        });

        Schema::create('girls_registrations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->nullable()->constrained()->nullOnDelete();
            $table->string('parent_name');
            $table->string('relationship', 60)->nullable();
            $table->string('email')->index();
            $table->string('phone', 40)->index();
            $table->string('alternate_phone', 40)->nullable();
            $table->string('child_name')->index();
            $table->string('age_group', 60)->nullable()->index();
            $table->date('date_of_birth')->nullable();
            $table->string('gender', 30)->nullable()->default('Female');
            $table->string('previous_participation', 30)->nullable();
            $table->string('area', 100)->nullable()->index();
            $table->string('communication_method', 30)->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone', 40)->nullable();
            $table->string('referral_source', 100)->nullable();
            $table->json('looking_forward_to')->nullable();
            $table->text('additional_notes')->nullable();
            $table->boolean('consent')->default(false);
            $table->string('status', 30)->default('new')->index();
            $table->text('admin_notes')->nullable();
            $table->json('payload')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamp('last_contacted_at')->nullable()->index();
            $table->timestamps();

            $table->index(['status', 'created_at']);
            $table->index(['event_id', 'status']);
        });

        Schema::create('contact_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->index();
            $table->string('phone', 40)->nullable()->index();
            $table->string('subject')->nullable();
            $table->text('message');
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
        Schema::dropIfExists('contact_submissions');
        Schema::dropIfExists('girls_registrations');
        Schema::dropIfExists('registrations');
    }
};
