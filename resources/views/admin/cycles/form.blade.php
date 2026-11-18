@extends('admin.layout')
@section('title',$cycle->exists?'Edit Cycle':'New Cycle')
@section('section','Events')
@section('content')
<div class="page-head"><div><h1>{{ $cycle->exists?'Edit cycle':'Create cycle' }}</h1><p>Cycles group related Seerat Club sessions.</p></div><a class="btn btn-secondary" href="{{ route('admin.cycles.index') }}">Back</a></div>
<form method="POST" action="{{ $cycle->exists?route('admin.cycles.update',$cycle):route('admin.cycles.store') }}">@csrf @if($cycle->exists) @method('PUT') @endif
<section class="card panel"><div class="form-grid"><div class="field"><label>Name</label><input class="input" name="name" value="{{ old('name',$cycle->name) }}" required></div><div class="field"><label>Slug</label><input class="input" name="slug" value="{{ old('slug',$cycle->slug) }}" required></div><div class="field"><label>Sort order</label><input class="input" type="number" min="0" name="sort_order" value="{{ old('sort_order',$cycle->sort_order??0) }}"></div><div class="field"><label class="check"><input type="checkbox" name="is_active" value="1" @checked(old('is_active',$cycle->exists?$cycle->is_active:true))> Active</label></div><div class="field full"><label>Description</label><textarea class="textarea" name="description">{{ old('description',$cycle->description) }}</textarea></div></div><button class="btn btn-primary mt16">Save cycle</button></section></form>
@if($cycle->exists)<form class="mt16" method="POST" action="{{ route('admin.cycles.destroy',$cycle) }}">@csrf @method('DELETE')<button class="btn btn-danger" data-confirm="Delete this cycle?">Delete cycle</button></form>@endif
@endsection
