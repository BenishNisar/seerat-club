@extends('admin.layout')
@section('title','Girls Registration #'.$girlsRegistration->id)
@section('section','Girls Registrations')
@section('content')
<div class="page-head"><div><h1>{{ $girlsRegistration->child_name }}</h1><p>Girls registration #{{ $girlsRegistration->id }}</p></div><a class="btn btn-secondary" href="{{ route('admin.girls.index') }}">Back</a></div>
<div class="grid two"><section class="card panel"><h2>Registration details</h2><div class="detail-list">
<div class="key">Parent / Guardian</div><div class="value">{{ $girlsRegistration->parent_name }}</div>
<div class="key">Email</div><div class="value">{{ $girlsRegistration->email }}</div>
<div class="key">Phone</div><div class="value">{{ $girlsRegistration->phone }}</div>
<div class="key">Child</div><div class="value">{{ $girlsRegistration->child_name }}</div>
<div class="key">Age group</div><div class="value">{{ $girlsRegistration->age_group ?: '—' }}</div>
<div class="key">Date of birth</div><div class="value">{{ $girlsRegistration->date_of_birth?->format('d M Y') ?: '—' }}</div>
<div class="key">Area</div><div class="value">{{ $girlsRegistration->area ?: '—' }}</div>
<div class="key">Additional notes</div><div class="value">{{ $girlsRegistration->additional_notes ?: '—' }}</div>
</div></section><section class="card panel"><h2>Admin review</h2><form method="POST" action="{{ route('admin.girls.update',$girlsRegistration) }}">@csrf @method('PUT')<div class="field mb16"><label>Status</label><select class="select" name="status">@foreach(['new','reviewing','contacted','approved','waitlisted','rejected','completed'] as $s)<option value="{{ $s }}" @selected($girlsRegistration->status===$s)>{{ ucfirst($s) }}</option>@endforeach</select></div><div class="field"><label>Internal notes</label><textarea class="textarea" name="admin_notes">{{ $girlsRegistration->admin_notes }}</textarea></div><button class="btn btn-primary mt16">Save changes</button></form><hr style="border:0;border-top:1px solid #dce3dd;margin:24px 0"><form method="POST" action="{{ route('admin.girls.destroy',$girlsRegistration) }}">@csrf @method('DELETE')<button class="btn btn-danger" data-confirm="Delete this girls registration permanently?" type="submit">Delete registration</button></form></section></div>
@endsection
