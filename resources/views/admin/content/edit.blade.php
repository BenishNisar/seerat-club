@extends('admin.layout')
@section('title','Edit Content')
@section('section','Content')
@section('content')
<div class="page-head"><div><h1>{{ $contentBlock->label ?: $contentBlock->block_key }}</h1><p>{{ $contentBlock->page }} · {{ $contentBlock->block_key }}</p></div><a class="btn btn-secondary" href="{{ route('admin.content.index',['page'=>$contentBlock->page]) }}">Back</a></div>
<form method="POST" action="{{ route('admin.content.update',$contentBlock) }}" enctype="multipart/form-data">@csrf @method('PUT')
<section class="card panel"><div class="form-grid">
<div class="field"><label>Label</label><input class="input" name="label" value="{{ old('label',$contentBlock->label) }}"></div>
<div class="field"><label>Sort order</label><input class="input" type="number" min="0" name="sort_order" value="{{ old('sort_order',$contentBlock->sort_order) }}"></div>
<div class="field full"><label>Title</label><input class="input" name="title" value="{{ old('title',$contentBlock->title) }}"></div>
<div class="field full"><label>Subtitle</label><textarea class="textarea" name="subtitle" style="min-height:90px">{{ old('subtitle',$contentBlock->subtitle) }}</textarea></div>
<div class="field full"><label>Body</label><textarea class="textarea" name="body" style="min-height:220px">{{ old('body',$contentBlock->body) }}</textarea></div>
<div class="field"><label>Button text</label><input class="input" name="link_text" value="{{ old('link_text',$contentBlock->link_text) }}"></div>
<div class="field"><label>Button URL</label><input class="input" name="link_url" value="{{ old('link_url',$contentBlock->link_url) }}"></div>
<div class="field"><label>Replace image</label><input class="input" type="file" name="image" accept="image/jpeg,image/png,image/webp"></div>
<div class="field"><label class="check"><input type="checkbox" name="is_active" value="1" @checked(old('is_active',$contentBlock->is_active))> Visible on website</label></div>
@if($contentBlock->image_path)<div class="field full"><span class="muted">Current image: {{ $contentBlock->image_path }}</span></div>@endif
</div><div class="mt16"><button class="btn btn-primary" type="submit">Save changes</button></div></section>
</form>
@endsection
