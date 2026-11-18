@extends('admin.layout')
@section('title',$user->exists?'Edit User':'New User')
@section('section','Admin Users')
@section('content')
<div class="page-head"><div><h1>{{ $user->exists?'Edit admin user':'Create admin user' }}</h1><p>Assign only the access this person needs.</p></div><a class="btn btn-secondary" href="{{ route('admin.users.index') }}">Back</a></div>
<form class="card panel" method="POST" action="{{ $user->exists?route('admin.users.update',$user):route('admin.users.store') }}">
@csrf @if($user->exists) @method('PUT') @endif
<div class="form-grid">
<div class="field"><label>Name</label><input class="input" name="name" value="{{ old('name',$user->name) }}" required></div>
<div class="field"><label>Email</label><input class="input" type="email" name="email" value="{{ old('email',$user->email) }}" required></div>
<div class="field"><label>Password {{ $user->exists?'(leave blank to keep current)':'' }}</label><input class="input" type="password" name="password" autocomplete="new-password"></div>
<div class="field"><label>Confirm password</label><input class="input" type="password" name="password_confirmation"></div>
<div class="field full"><label>Roles</label><div class="checks">@foreach($roles as $role)<label class="check"><input type="checkbox" name="roles[]" value="{{ $role->id }}" @checked(in_array($role->id,old('roles',$user->roles?->pluck('id')->all()??[])))>{{ $role->name }}</label>@endforeach</div></div>
<div class="field full"><label class="check"><input type="checkbox" name="is_active" value="1" @checked(old('is_active',$user->exists?$user->is_active:true))> Active account</label></div>
</div>
<div class="mt16"><button class="btn btn-primary" type="submit">Save user</button></div>
</form>
@endsection
