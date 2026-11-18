@extends('admin.layout')
@section('title','Admin Users')
@section('section','Admin Users')
@section('content')
<div class="page-head"><div><h1>Admin users</h1><p>Manage access, status and assigned roles.</p></div><a class="btn btn-primary" href="{{ route('admin.users.create') }}">+ Add user</a></div>
<form class="toolbar" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Search name or email"><select class="select" name="status"><option value="">All statuses</option><option value="active" @selected(request('status')==='active')>Active</option><option value="inactive" @selected(request('status')==='inactive')>Inactive</option></select><button class="btn btn-secondary">Filter</button></form>
<div class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>User</th><th>Roles</th><th>Status</th><th>Last login</th><th>Actions</th></tr></thead><tbody>
@forelse($users as $user)<tr><td><strong>{{ $user->name }}</strong><div class="muted">{{ $user->email }}</div></td><td>{{ $user->roles->pluck('name')->join(', ') ?: 'None' }}</td><td><span class="badge {{ $user->is_active?'':'red' }}">{{ $user->is_active?'Active':'Inactive' }}</span></td><td>{{ $user->last_login_at?->diffForHumans() ?? 'Never' }}</td><td><a class="btn btn-secondary" href="{{ route('admin.users.edit',$user) }}">Edit</a> <form class="inline" method="POST" action="{{ route('admin.users.destroy',$user) }}">@csrf @method('DELETE')<button data-confirm="Delete this admin user?" class="btn btn-danger" type="submit">Delete</button></form></td></tr>
@empty<tr><td colspan="5" class="empty">No admin users found.</td></tr>@endforelse
</tbody></table></div><div class="mt16">{{ $users->links() }}</div></div>
@endsection
