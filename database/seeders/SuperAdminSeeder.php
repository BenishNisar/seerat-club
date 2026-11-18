<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use RuntimeException;

class SuperAdminSeeder extends Seeder
{
    public function run(): void
    {
        $email = env('SUPER_ADMIN_EMAIL');
        $password = env('SUPER_ADMIN_PASSWORD');
        $name = env('SUPER_ADMIN_NAME', 'Seerat Club Super Admin');

        if (! $email || ! $password) {
            throw new RuntimeException(
                'Set SUPER_ADMIN_EMAIL and SUPER_ADMIN_PASSWORD in .env before running the SuperAdminSeeder.'
            );
        }

        if (strlen($password) < 12) {
            throw new RuntimeException('SUPER_ADMIN_PASSWORD must be at least 12 characters.');
        }

        $user = User::updateOrCreate(
            ['email' => $email],
            [
                'name' => $name,
                'password' => Hash::make($password),
                'is_active' => true,
                'email_verified_at' => now(),
            ]
        );

        $role = Role::where('slug', 'super-admin')->firstOrFail();
        $user->roles()->syncWithoutDetaching([$role->id]);
    }
}
