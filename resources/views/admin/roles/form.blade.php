@extends('admin.layout')
@section('title',$role->exists?'Edit Role':'New Role')
@section('section','Roles & Permissions')
@section('content')
<div class="page-head"><div><h1>{{ $role->exists?$role->name:'Create role' }}</h1><p>Set role details and allowed modules.</p></div><a class="btn btn-secondary" href="{{ route('admin.roles.index') }}">Back</a></div>
<form class="card panel" method="POST" action="{{ $role->exists?route('admin.roles.update',$role):route('admin.roles.store') }}">@csrf @if($role->exists) @method('PUT') @endif
<div class="form-grid"><div class="field"><label>Name</label><input class="input" name="name" value="{{ old('name',$role->name) }}" required></div><div class="field"><label>Slug</label><input class="input" name="slug" value="{{ old('slug',$role->slug) }}" @readonly($role->slug==='super-admin') required></div><div class="field full"><label>Description</label><textarea class="textarea" name="description">{{ old('description',$role->description) }}</textarea></div></div>
@if($role->slug!=='super-admin')
<div class="mt16">@foreach($permissionGroups as $group=>$permissions)<div class="card" style="padding:16px;margin-bottom:12px"><strong style="text-transform:capitalize">{{ $group }}</strong><div class="checks mt16">@foreach($permissions as $permission)<label class="check"><input type="checkbox" name="permissions[]" value="{{ $permission->id }}" @checked($role->exists && $role->permissions->contains($permission))>{{ $permission->name }}</label>@endforeach</div></div>@endforeach</div>
@else<div class="flash mt16">Super Admin always has unrestricted access.</div>@endif
<button class="btn btn-primary mt16" type="submit">{{ $role->exists?'Save role':'Create role' }}</button></form>
@if($role->exists && !$role->is_system && $role->slug!=='super-admin')<form class="mt16" method="POST" action="{{ route('admin.roles.destroy',$role) }}">@csrf @method('DELETE')<button class="btn btn-danger" data-confirm="Delete this custom role?">Delete role</button></form>@endif
@endsection
