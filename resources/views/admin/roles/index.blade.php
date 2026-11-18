@extends('admin.layout')
@section('title','Roles & Permissions')
@section('section','Roles & Permissions')
@section('content')
<div class="page-head"><div><h1>Roles & permissions</h1><p>Backend authorization is enforced by permission middleware.</p></div><a class="btn btn-primary" href="{{ route('admin.roles.create') }}">+ New Role</a></div>
<div class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>Role</th><th>Users</th><th>Permissions</th><th></th></tr></thead><tbody>
@foreach($roles as $role)<tr><td><strong>{{ $role->name }}</strong><div class="muted">{{ $role->slug }}</div></td><td>{{ $role->users_count }}</td><td>{{ $role->slug==='super-admin'?'All permissions':$role->permissions->pluck('name')->join(', ') }}</td><td><a class="btn btn-secondary" href="{{ route('admin.roles.edit',$role) }}">Manage</a></td></tr>@endforeach
</tbody></table></div></div>
@endsection
