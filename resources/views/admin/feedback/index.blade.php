@extends('admin.layout')
@section('title', 'Feedback')
@section('section', 'Feedback Inbox')
@section('content')
<div class="card"><div class="card-header"><h3>Feedback Inbox</h3></div><div class="card-body">
<form method="GET" class="filter-row"><input name="q" value="{{ request('q') }}" placeholder="Search feedback"><select name="status"><option value="">All statuses</option>@foreach(['unread','read','reviewed','archived'] as $status)<option value="{{ $status }}" @selected(request('status')===$status)>{{ ucfirst($status) }}</option>@endforeach</select><button class="btn" type="submit">Filter</button></form>
<div class="table-wrap"><table class="table"><thead><tr><th>Name</th><th>Type</th><th>Rating</th><th>Status</th><th>Received</th><th></th></tr></thead><tbody>@forelse($feedback as $item)<tr><td>{{ $item->name }}</td><td>{{ ucfirst($item->relationship) }}</td><td>{{ $item->rating }}/5</td><td>{{ ucfirst($item->status) }}</td><td>{{ $item->created_at?->format('d M Y, h:i A') }}</td><td><a class="btn btn-sm" href="{{ route('admin.feedback.show',$item) }}">View</a></td></tr>@empty<tr><td colspan="6">No feedback found.</td></tr>@endforelse</tbody></table></div>{{ $feedback->links() }}
</div></div>
@endsection
