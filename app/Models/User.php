<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'email', 'password', 'is_active', 'profile_photo_path', 'last_login_at',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_login_at' => 'datetime',
            'is_active' => 'boolean',
            'password' => 'hashed',
        ];
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        return Permission::query()
            ->whereHas('roles.users', fn ($query) => $query->whereKey($this->id))
            ->distinct();
    }

    public function hasRole(string $role): bool
    {
        if (! $this->relationLoaded('roles')) {
            $this->load('roles.permissions');
        }

        return $this->roles->contains('slug', $role);
    }

    public function isSuperAdmin(): bool
    {
        return $this->hasRole('super-admin');
    }

    public function hasPermission(string $permission): bool
    {
        if (! $this->relationLoaded('roles')) {
            $this->load('roles.permissions');
        }

        return $this->isSuperAdmin()
            || $this->roles->contains(
                fn (Role $role) => $role->permissions->contains('slug', $permission)
            );
    }
}
