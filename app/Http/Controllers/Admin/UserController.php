<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\Role;
use App\Models\User;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(Request $request): View
    {
        $users = User::with('roles')
            ->when($request->q, fn ($q, $term) => $q->where(fn ($x) => $x
                ->where('name', 'like', "%{$term}%")
                ->orWhere('email', 'like', "%{$term}%")))
            ->when($request->status === 'active', fn ($q) => $q->where('is_active', true))
            ->when($request->status === 'inactive', fn ($q) => $q->where('is_active', false))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('admin.users.index', compact('users'));
    }

    public function create(): View
    {
        return view('admin.users.form', [
            'user' => new User(),
            'roles' => Role::orderBy('name')->get(),
        ]);
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $roles = $data['roles'] ?? [];
        unset($data['roles'], $data['password_confirmation']);
        $data['is_active'] = $request->boolean('is_active');
        $user = User::create($data);
        $user->roles()->sync($roles);
        ActivityLogger::record('user.create', $user, 'Admin user created');

        return redirect()->route('admin.users.index')->with('success', 'User created.');
    }

    public function edit(User $user): View
    {
        $user->load('roles');
        return view('admin.users.form', [
            'user' => $user,
            'roles' => Role::orderBy('name')->get(),
        ]);
    }

    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();
        $roles = $data['roles'] ?? [];
        unset($data['roles'], $data['password_confirmation']);

        if (blank($data['password'] ?? null)) {
            unset($data['password']);
        }

        $data['is_active'] = $request->boolean('is_active');
        abort_if(auth()->id() === $user->id && ! $data['is_active'], 422, 'You cannot deactivate your own account.');

        if ($user->isSuperAdmin() && ! in_array((int) Role::where('slug', 'super-admin')->value('id'), array_map('intval', $roles), true)) {
            $superAdmins = User::whereHas('roles', fn ($q) => $q->where('slug', 'super-admin'))->count();
            abort_if($superAdmins <= 1, 422, 'At least one Super Admin must remain assigned.');
        }

        $user->update($data);
        $user->roles()->sync($roles);
        ActivityLogger::record('user.update', $user, 'Admin user updated');

        return redirect()->route('admin.users.index')->with('success', 'User updated.');
    }

    public function destroy(User $user): RedirectResponse
    {
        abort_if(auth()->id() === $user->id, 422, 'You cannot delete your own account.');
        if ($user->isSuperAdmin()) {
            $superAdmins = User::whereHas('roles', fn ($q) => $q->where('slug', 'super-admin'))->count();
            abort_if($superAdmins <= 1, 422, 'The last Super Admin cannot be deleted.');
        }
        ActivityLogger::record('user.delete', $user, 'Admin user deleted');
        $user->delete();

        return back()->with('success', 'User deleted.');
    }
}
