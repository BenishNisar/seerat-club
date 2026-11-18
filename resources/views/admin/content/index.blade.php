@extends('admin.layout')
@section('title','Website Content')
@section('section','Content')
@section('content')
<div class="page-head"><div><h1>Website content</h1><p>Edit important frontend copy and images without touching Blade files.</p></div></div>
<section class="card panel">
<form class="toolbar" method="GET"><select class="select" name="page" onchange="this.form.submit()">@foreach($pages as $p)<option value="{{ $p }}" @selected($page===$p)>{{ ucfirst($p) }}</option>@endforeach</select></form>
<div class="table-wrap"><table class="table"><thead><tr><th>Block</th><th>Title</th><th>Status</th><th>Order</th><th></th></tr></thead><tbody>
@forelse($blocks as $block)
<tr><td><strong>{{ $block->label ?: $block->block_key }}</strong><div class="muted">{{ $block->block_key }}</div></td><td>{{ Illuminate\Support\Str::limit($block->title,70) }}</td><td><span class="badge {{ $block->is_active?'':'red' }}">{{ $block->is_active?'Active':'Hidden' }}</span></td><td>{{ $block->sort_order }}</td><td><a class="btn btn-secondary" href="{{ route('admin.content.edit',$block) }}">Edit</a></td></tr>
@empty<tr><td colspan="5" class="empty">No content blocks found.</td></tr>@endforelse
</tbody></table></div>
</section>
@endsection
