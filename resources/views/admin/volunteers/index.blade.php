@extends('admin.layout')
@section('title','Volunteers')
@section('section','Volunteers')
@section('content')
<div class="page-head"><div><h1>Volunteer requests</h1><p>Search, review and manage people offering support.</p></div></div>
<section class="card panel"><form class="toolbar" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Search name, email, phone"><select class="select" name="status"><option value="">All statuses</option>@foreach(['new','contacted','approved','declined','closed'] as $s)<option value="{{ $s }}" @selected(request('status')===$s)>{{ ucfirst($s) }}</option>@endforeach</select><button class="btn btn-primary">Filter</button></form>
<div class="table-wrap"><table class="table"><thead><tr><th>Name</th><th>Support</th><th>Contact</th><th>Status</th><th>Submitted</th></tr></thead><tbody>
@forelse($items as $item)<tr><td><a class="link" href="{{ route('admin.volunteers.show',$item) }}">{{ $item->full_name }}</a></td><td>{{ $item->support_type ?: '—' }}</td><td>{{ $item->phone }}<div class="muted">{{ $item->email }}</div></td><td><span class="badge">{{ ucfirst($item->status) }}</span></td><td>{{ $item->created_at->format('d M Y') }}</td></tr>@empty<tr><td colspan="5" class="empty">No volunteer requests yet.</td></tr>@endforelse
</tbody></table></div><div class="mt16">{{ $items->links() }}</div></section>
@endsection
