@extends('admin.layout')
@section('title','Profile')
@section('section','Profile')
@section('content')
<div class="page-head"><div><h1>Your profile</h1><p>Update your account details or change your password.</p></div></div>
<form class="card panel" method="POST" action="{{ route('admin.profile.update') }}">@csrf @method('PUT')<div class="form-grid">
<div class="field"><label>Name</label><input class="input" name="name" value="{{ old('name',$user->name) }}" required></div><div class="field"><label>Email</label><input class="input" type="email" name="email" value="{{ old('email',$user->email) }}" required></div>
<div class="field"><label>Current password</label><input class="input" type="password" name="current_password" autocomplete="current-password"></div><div class="field"></div>
<div class="field"><label>New password</label><input class="input" type="password" name="password" autocomplete="new-password"></div><div class="field"><label>Confirm new password</label><input class="input" type="password" name="password_confirmation"></div>
</div><button class="btn btn-primary mt16">Save profile</button></form>
@endsection
