@extends('admin.layout')
@section('title','SEO')
@section('section','SEO')
@section('content')
<div class="page-head"><div><h1>Page SEO</h1><p>Set unique metadata for important public pages.</p></div></div>
<div class="grid">
@foreach($pages as $pageKey=>$label)
@php($record=$records->get($pageKey))
<form class="card panel" method="POST" action="{{ route('admin.seo.update') }}">@csrf @method('PUT')
<input type="hidden" name="page_key" value="{{ $pageKey }}">
<h2>{{ $label }}</h2><div class="form-grid">
<div class="field full"><label>SEO title</label><input class="input" name="title" value="{{ old('title',$record?->title) }}"></div>
<div class="field full"><label>Meta description</label><textarea class="textarea" name="description">{{ old('description',$record?->description) }}</textarea></div>
<div class="field full"><label>Keywords</label><input class="input" name="keywords" value="{{ old('keywords',$record?->keywords) }}"></div>
<div class="field"><label>Canonical URL</label><input class="input" type="url" name="canonical_url" value="{{ old('canonical_url',$record?->canonical_url) }}"></div>
<div class="field"><label>Open Graph image path</label><input class="input" name="og_image_path" value="{{ old('og_image_path',$record?->og_image_path) }}"></div>
<div class="field"><label>Robots</label><input class="input" name="robots" value="{{ old('robots',$record?->robots ?? 'index,follow') }}"></div>
</div><button class="btn btn-primary mt16">Save {{ $label }} SEO</button></form>
@endforeach
</div>
@endsection
