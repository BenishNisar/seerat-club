<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class RoleController extends Controller
{
    public function index(): View
    {
        return view('admin.roles.index', [
            'roles' => Role::withCount('users')->with('permissions')->orderBy('name')->get(),
        ]);
    }

    public function create(): View
    {
        return view('admin.roles.form', [
            'role' => new Role(),
            'permissionGroups' => Permission::orderBy('group')->orderBy('name')->get()->groupBy('group'),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $this->validated($request);
        $permissions = $data['permissions'] ?? [];
        unset($data['permissions']);
        $data['is_system'] = false;
        $role = Role::create($data);
        $role->permissions()->sync($permissions);
        ActivityLogger::record('role.create', $role, 'Role created');
        return redirect()->route('admin.roles.index')->with('success', 'Role created.');
    }

    public function edit(Role $role): View
    {
        return view('admin.roles.form', [
            'role' => $role->load('permissions'),
            'permissionGroups' => Permission::orderBy('group')->orderBy('name')->get()->groupBy('group'),
        ]);
    }

    public function update(Request $request, Role $role): RedirectResponse
    {
        $data = $this->validated($request, $role);

        if ($role->slug === 'super-admin') {
            unset($data['slug']);
        }

        $permissions = $data['permissions'] ?? [];
        unset($data['permissions']);
        $role->update($data);

        if ($role->slug !== 'super-admin') {
            $role->permissions()->sync($permissions);
        }

        ActivityLogger::record('role.update', $role, 'Role permissions updated');

        return redirect()->route('admin.roles.index')->with('success', 'Role updated.');
    }

    public function destroy(Role $role): RedirectResponse
    {
        abort_if($role->is_system || $role->slug === 'super-admin', 422, 'System roles cannot be deleted.');
        abort_if($role->users()->exists(), 422, 'Reassign users before deleting this role.');
        ActivityLogger::record('role.delete', $role, 'Role deleted');
        $role->delete();
        return back()->with('success', 'Role deleted.');
    }

    private function validated(Request $request, ?Role $role = null): array
    {
        return $request->validate([
            'name' => ['required', 'string', 'max:80'],
            'slug' => ['required', 'string', 'max:80', Rule::unique('roles', 'slug')->ignore($role?->id)],
            'description' => ['nullable', 'string', 'max:1000'],
            'permissions' => ['nullable', 'array'],
            'permissions.*' => ['integer', 'exists:permissions,id'],
        ]);
    }
}
