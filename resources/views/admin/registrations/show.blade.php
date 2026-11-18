@extends('admin.layout')
@section('title','Registration #'.$registration->id)
@section('section','Registrations')
@section('content')
<div class="page-head"><div><h1>{{ $registration->child_name }}</h1><p>Registration #{{ $registration->id }} · {{ $registration->created_at->format('d F Y, g:i A') }}</p></div><a class="btn btn-secondary" href="{{ route('admin.registrations.index') }}">Back</a></div>
<div class="grid two">
<section class="card panel"><h2>Registration details</h2><div class="detail-list">
<div class="key">Parent / Guardian</div><div class="value">{{ $registration->parent_name }}</div>
<div class="key">Relationship</div><div class="value">{{ $registration->relationship ?: '—' }}</div>
<div class="key">Email</div><div class="value">{{ $registration->email }}</div>
<div class="key">Phone</div><div class="value">{{ $registration->phone }}</div>
<div class="key">Alternative phone</div><div class="value">{{ $registration->alternate_phone ?: '—' }}</div>
<div class="key">Child</div><div class="value">{{ $registration->child_name }}</div>
<div class="key">Age group</div><div class="value">{{ $registration->age_group ?: '—' }}</div>
<div class="key">Date of birth</div><div class="value">{{ $registration->date_of_birth?->format('d M Y') ?: '—' }}</div>
<div class="key">Gender</div><div class="value">{{ $registration->gender ?: '—' }}</div>
<div class="key">Area</div><div class="value">{{ $registration->area ?: '—' }}</div>
<div class="key">Preferred contact</div><div class="value">{{ $registration->communication_method ?: '—' }}</div>
<div class="key">Emergency contact</div><div class="value">{{ $registration->emergency_contact_name }} {{ $registration->emergency_contact_phone }}</div>
<div class="key">Heard about us</div><div class="value">{{ $registration->referral_source ?: '—' }}</div>
<div class="key">Looking forward to</div><div class="value">{{ collect($registration->looking_forward_to)->join(', ') ?: '—' }}</div>
<div class="key">Additional notes</div><div class="value">{{ $registration->additional_notes ?: '—' }}</div>
</div></section>
<section class="card panel"><h2>Admin review</h2><form method="POST" action="{{ route('admin.registrations.update',$registration) }}">@csrf @method('PUT')<div class="field mb16"><label>Status</label><select class="select" name="status">@foreach(['new','reviewing','contacted','approved','waitlisted','rejected','completed'] as $s)<option value="{{ $s }}" @selected($registration->status===$s)>{{ ucfirst($s) }}</option>@endforeach</select></div><div class="field"><label>Internal notes</label><textarea class="textarea" name="admin_notes">{{ $registration->admin_notes }}</textarea></div><button class="btn btn-primary mt16">Save changes</button></form><hr style="border:0;border-top:1px solid #dce3dd;margin:24px 0"><form method="POST" action="{{ route('admin.registrations.destroy',$registration) }}">@csrf @method('DELETE')<button class="btn btn-danger" data-confirm="Delete this registration permanently?" type="submit">Delete registration</button></form></section>
</div>
@endsection
