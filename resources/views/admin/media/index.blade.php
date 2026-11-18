@extends('admin.layout')
@section('title','Media Library')
@section('section','Media Library')
@section('content')
<div class="page-head"><div><h1>Media library</h1><p>Upload and manage safe website media files.</p></div></div>
<div class="grid two">
<section class="card panel">
<h2>Upload media</h2>
<form method="POST" action="{{ route('admin.media.store') }}" enctype="multipart/form-data">@csrf
<div class="field mb16"><label>File</label><input class="input" type="file" name="file" accept=".jpg,.jpeg,.png,.webp,.pdf" required></div>
<div class="field mb16"><label>Collection</label><input class="input" name="collection" value="{{ old('collection','general') }}" required></div>
<div class="field"><label>Alt text</label><input class="input" name="alt_text" value="{{ old('alt_text') }}"></div>
<button class="btn btn-primary mt16" type="submit">Upload file</button>
</form>
</section>
<section class="card panel"><h2>Library notes</h2><p class="muted">Images and PDFs are validated before storage. Uploaded files are kept on Laravel's public disk and tracked with their original filename, MIME type, dimensions and size.</p></section>
</div>
<form class="toolbar mt16" method="GET"><input class="input" name="q" value="{{ request('q') }}" placeholder="Search filename"><input class="input" name="collection" value="{{ request('collection') }}" placeholder="Collection"><button class="btn btn-secondary">Filter</button></form>
<section class="card panel">
@if($media->isEmpty())<div class="empty">No media uploaded yet.</div>@else
<div class="media-grid">
@foreach($media as $item)
<div class="media-card">
@if(str_starts_with((string)$item->mime_type,'image/'))<img src="{{ asset('storage/'.$item->path) }}" alt="{{ $item->alt_text ?: $item->original_name }}">@else<div style="height:160px;display:grid;place-items:center;background:#eef1ed;font-weight:800">PDF</div>@endif
<div class="actions"><strong style="font-size:12px;display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap">{{ $item->original_name }}</strong><div class="muted" style="font-size:11px">{{ $item->collection }}</div><form method="POST" action="{{ route('admin.media.destroy',$item) }}" style="margin-top:8px">@csrf @method('DELETE')<button class="btn btn-danger" data-confirm="Delete this media file?" type="submit">Delete</button></form></div>
</div>
@endforeach
</div><div class="mt16">{{ $media->links() }}</div>
@endif
</section>
@endsection
