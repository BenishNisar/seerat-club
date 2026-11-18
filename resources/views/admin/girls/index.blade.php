@extends('admin.layout')
@section('title','Girls Registrations')
@section('section','Girls Registrations')
@section('content')
<div class="page-head"><div><h1>Girls registrations</h1><p>Dedicated girls registration management.</p></div></div>
<form class="toolbar" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Parent, child, email or phone"><select class="select" name="status"><option value="">All statuses</option>@foreach(['new','reviewing','contacted','approved','waitlisted','rejected','completed'] as $s)<option value="{{ $s }}" @selected(request('status')===$s)>{{ ucfirst($s) }}</option>@endforeach</select><button class="btn btn-secondary">Filter</button></form>
<div class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>Child</th><th>Parent</th><th>Contact</th><th>Age</th><th>Status</th><th>Submitted</th><th></th></tr></thead><tbody>
@forelse($registrations as $registration)<tr><td><strong>{{ $registration->child_name }}</strong></td><td>{{ $registration->parent_name }}</td><td>{{ $registration->phone }}<div class="muted">{{ $registration->email }}</div></td><td>{{ $registration->age_group ?: '—' }}</td><td><span class="badge {{ $registration->status==='new'?'warn':'' }}">{{ ucfirst($registration->status) }}</span></td><td>{{ $registration->created_at->format('d M Y') }}</td><td><a class="btn btn-secondary" href="{{ route('admin.girls.show',$registration) }}">View</a></td></tr>
@empty<tr><td colspan="7" class="empty">No girls registrations found.</td></tr>@endforelse
</tbody></table></div><div class="mt16">{{ $registrations->links() }}</div></div>
@endsection
