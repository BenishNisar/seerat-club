@extends('admin.layout')
@section('title','Registrations')
@section('section','Registrations')
@section('content')
<div class="page-head"><div><h1>Registrations</h1><p>Search, filter, review and export member registrations.</p></div><a class="btn btn-secondary" href="{{ route('admin.registrations.export',request()->query()) }}">Export CSV</a></div>
<form class="toolbar" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Parent, child, email or phone"><select class="select" name="status"><option value="">All statuses</option>@foreach(['new','reviewing','contacted','approved','waitlisted','rejected','completed'] as $s)<option value="{{ $s }}" @selected(request('status')===$s)>{{ ucfirst($s) }}</option>@endforeach</select><select class="select" name="event_id"><option value="">All events</option>@foreach($events as $event)<option value="{{ $event->id }}" @selected((string)request('event_id')===(string)$event->id)>{{ $event->title }}</option>@endforeach</select><input class="input" type="date" name="from" value="{{ request('from') }}"><input class="input" type="date" name="to" value="{{ request('to') }}"><button class="btn btn-secondary">Filter</button></form>
<div class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>Child</th><th>Parent</th><th>Contact</th><th>Age</th><th>Status</th><th>Submitted</th><th></th></tr></thead><tbody>
@forelse($registrations as $registration)<tr><td><strong>{{ $registration->child_name }}</strong></td><td>{{ $registration->parent_name }}</td><td>{{ $registration->phone }}<div class="muted">{{ $registration->email }}</div></td><td>{{ $registration->age_group ?: '—' }}</td><td><span class="badge {{ $registration->status==='new'?'warn':'' }}">{{ ucfirst($registration->status) }}</span></td><td>{{ $registration->created_at->format('d M Y') }}</td><td><a class="btn btn-secondary" href="{{ route('admin.registrations.show',$registration) }}">View</a></td></tr>
@empty<tr><td colspan="7" class="empty">No registrations found.</td></tr>@endforelse
</tbody></table></div><div class="mt16">{{ $registrations->links() }}</div></div>
@endsection
