@extends('admin.layout')
@section('title','Event Cycles')
@section('section','Events')
@section('content')
<div class="page-head"><div><h1>Event cycles</h1><p>Organize events into Cycle 1, Cycle 2 or future learning journeys.</p></div><a class="btn btn-primary" href="{{ route('admin.cycles.create') }}">+ New Cycle</a></div>
<section class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>Cycle</th><th>Events</th><th>Status</th><th>Order</th><th></th></tr></thead><tbody>
@forelse($cycles as $cycle)<tr><td><strong>{{ $cycle->name }}</strong><div class="muted">{{ $cycle->slug }}</div></td><td>{{ $cycle->events_count }}</td><td><span class="badge {{ $cycle->is_active?'':'red' }}">{{ $cycle->is_active?'Active':'Inactive' }}</span></td><td>{{ $cycle->sort_order }}</td><td><a class="btn btn-secondary" href="{{ route('admin.cycles.edit',$cycle) }}">Edit</a></td></tr>@empty<tr><td colspan="5" class="empty">No cycles yet.</td></tr>@endforelse
</tbody></table></div></section>
@endsection
