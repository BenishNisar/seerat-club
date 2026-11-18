<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        $definitions = [
            'users.manage' => ['Users & Roles', 'users'],
            'settings.manage' => ['Website Settings', 'settings'],
            'content.manage' => ['Website Content', 'content'],
            'events.manage' => ['Events', 'events'],
            'registrations.manage' => ['Registrations', 'registrations'],
            'contacts.manage' => ['Contact Inbox', 'contacts'],
            'volunteers.manage' => ['Volunteers', 'volunteers'],
            'activity.view' => ['Activity Log', 'activity'],
            'media.manage' => ['Media Library', 'media'],
            'seo.manage' => ['SEO', 'seo'],
        ];

        foreach ($definitions as $slug => [$name, $group]) {
            Permission::updateOrCreate(
                ['slug' => $slug],
                ['name' => $name, 'group' => $group]
            );
        }

        $roles = [
            'super-admin' => ['Super Admin', array_keys($definitions)],
            'admin' => ['Admin', array_keys($definitions)],
            'content-manager' => ['Content Manager', ['content.manage', 'events.manage', 'settings.manage', 'media.manage', 'seo.manage']],
            'event-manager' => ['Event Manager', ['events.manage']],
            'registration-manager' => ['Registration Manager', ['registrations.manage']],
            'support-manager' => ['Support Manager', ['contacts.manage', 'volunteers.manage']],
        ];

        foreach ($roles as $slug => [$name, $permissions]) {
            $role = Role::updateOrCreate(
                ['slug' => $slug],
                [
                    'name' => $name,
                    'is_system' => true,
                    'description' => $name.' role for Seerat Club administration.',
                ]
            );

            $role->permissions()->sync(
                Permission::whereIn('slug', $permissions)->pluck('id')->all()
            );
        }
    }
}
