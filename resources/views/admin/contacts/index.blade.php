@extends('admin.layout')
@section('title','Contact Inbox')
@section('section','Contact Inbox')
@section('content')
<div class="page-head"><div><h1>Contact inbox</h1><p>Visitor messages with read status and internal notes.</p></div></div>
<form class="toolbar" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Search name, email or subject"><select class="select" name="status"><option value="">All statuses</option>@foreach(['unread','read','replied','archived'] as $s)<option value="{{ $s }}" @selected(request('status')===$s)>{{ ucfirst($s) }}</option>@endforeach</select><button class="btn btn-secondary">Filter</button></form>
<div class="card panel"><div class="table-wrap"><table class="table"><thead><tr><th>Sender</th><th>Subject</th><th>Status</th><th>Received</th><th></th></tr></thead><tbody>
@forelse($contacts as $contact)<tr><td><strong>{{ $contact->name }}</strong><div class="muted">{{ $contact->email }}</div></td><td>{{ $contact->subject ?: 'General enquiry' }}</td><td><span class="badge {{ $contact->status==='unread'?'warn':'' }}">{{ ucfirst($contact->status) }}</span></td><td>{{ $contact->created_at->format('d M Y, g:i A') }}</td><td><a class="btn btn-secondary" href="{{ route('admin.contacts.show',$contact) }}">Open</a></td></tr>
@empty<tr><td colspan="5" class="empty">No contact messages found.</td></tr>@endforelse
</tbody></table></div><div class="mt16">{{ $contacts->links() }}</div></div>
@endsection
