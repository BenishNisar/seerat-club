@extends('admin.layout')
@section('title','Dashboard')
@section('section','Dashboard')
@section('content')
<div class="page-head"><div><h1>Dashboard</h1><p>A clear view of Seerat Club activity.</p></div><div class="quick-actions">@if(auth()->user()->hasPermission('content.manage'))<a class="btn btn-secondary" href="{{ route('admin.content.index') }}">Edit Website</a>@endif @if(auth()->user()->hasPermission('events.manage'))<a class="btn btn-primary" href="{{ route('admin.events.create') }}">+ New Event</a>@endif</div></div>
<div class="grid stats">
    <div class="card stat"><small>Total registrations</small><strong>{{ number_format($stats['registrations']) }}</strong><span>General membership submissions</span></div>
    <div class="card stat"><small>Girls registrations</small><strong>{{ number_format($stats['girls_registrations']) }}</strong><span>Dedicated girls submissions</span></div>
    <div class="card stat"><small>Contact inbox</small><strong>{{ number_format($stats['contacts']) }}</strong><span>{{ $stats['unread_contacts'] }} unread</span></div>
    <div class="card stat"><small>Events</small><strong>{{ number_format($stats['events']) }}</strong><span>{{ $stats['published_events'] }} published · {{ $stats['draft_events'] }} drafts</span></div>
    <div class="card stat"><small>Volunteer requests</small><strong>{{ number_format($stats['volunteers']) }}</strong><span>People offering support</span></div>
</div>
<div class="grid two">
    <section class="card panel">
        <h2>Recent registrations</h2>
        <div class="table-wrap"><table class="table"><thead><tr><th>Child</th><th>Parent</th><th>Status</th><th>Submitted</th></tr></thead><tbody>
        @forelse($recentRegistrations as $item)
            <tr><td><a class="link" href="{{ route('admin.registrations.show',$item) }}">{{ $item->child_name }}</a></td><td>{{ $item->parent_name }}</td><td><span class="badge">{{ ucfirst($item->status) }}</span></td><td>{{ $item->created_at->diffForHumans() }}</td></tr>
        @empty<tr><td colspan="4" class="empty">No registrations yet.</td></tr>@endforelse
        </tbody></table></div>
    </section>
    <section class="card panel">
        <h2>Recent contacts</h2>
        <div class="table-wrap"><table class="table"><thead><tr><th>Sender</th><th>Status</th><th>Received</th></tr></thead><tbody>
        @forelse($recentContacts as $item)
            <tr><td><a class="link" href="{{ route('admin.contacts.show',$item) }}">{{ $item->name }}</a><div class="muted">{{ $item->email }}</div></td><td><span class="badge {{ $item->status==='unread'?'warn':'' }}">{{ ucfirst($item->status) }}</span></td><td>{{ $item->created_at->diffForHumans() }}</td></tr>
        @empty<tr><td colspan="3" class="empty">No contact messages yet.</td></tr>@endforelse
        </tbody></table></div>
    </section>
</div>
<section class="card panel mt16">
    <h2>Submissions · Last 6 months</h2>
    <div class="trend" aria-label="Six month submission trend">
        @foreach($activityTrend as $row)
            @php($total = $row['registrations'] + $row['contacts'] + $row['volunteers'])
            <div class="trend-col"><span class="trend-value">{{ $total }}</span><div class="trend-bar" style="height:{{ max(5,round(($total/$trendMax)*130)) }}px" title="{{ $row['registrations'] }} registrations, {{ $row['contacts'] }} contacts, {{ $row['volunteers'] }} volunteers"></div><span class="trend-label">{{ $row['label'] }}</span></div>
        @endforeach
    </div>
</section>
<section class="card panel mt16">
    <h2>Recent activity</h2>
    <div class="table-wrap"><table class="table"><thead><tr><th>Action</th><th>User</th><th>Description</th><th>Time</th></tr></thead><tbody>
    @forelse($recentActivity as $log)<tr><td>{{ $log->action }}</td><td>{{ $log->user?->name ?? 'System' }}</td><td>{{ $log->description }}</td><td>{{ $log->created_at->diffForHumans() }}</td></tr>@empty<tr><td colspan="4" class="empty">No activity yet.</td></tr>@endforelse
    </tbody></table></div>
</section>
@endsection

