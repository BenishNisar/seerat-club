@extends('admin.layout')
@section('title','Activity Log')
@section('section','Activity Log')
@section('content')
<div class="page-head"><div><h1>Activity log</h1><p>Important administrative actions for accountability.</p></div></div>
<form class="toolbar" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Search action or description"><button class="btn btn-secondary">Filter</button></form>
<div class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>Time</th><th>User</th><th>Action</th><th>Description</th><th>IP</th></tr></thead><tbody>
@forelse($logs as $log)<tr><td>{{ $log->created_at->format('d M Y H:i') }}</td><td>{{ $log->user?->name ?? 'System' }}</td><td><span class="badge">{{ $log->action }}</span></td><td>{{ $log->description }}</td><td>{{ $log->ip_address }}</td></tr>@empty<tr><td colspan="5" class="empty">No activity found.</td></tr>@endforelse
</tbody></table></div><div class="mt16">{{ $logs->links() }}</div></div>
@endsection
