@extends('admin.layout')
@section('title','Website Settings')
@section('section','Website Settings')
@section('content')
<div class="page-head"><div><h1>Website settings</h1><p>Manage important global details from one place.</p></div></div>
<form method="POST" action="{{ route('admin.settings.update') }}" enctype="multipart/form-data">@csrf @method('PUT')
@foreach($settings as $group=>$items)
<section class="card panel mb16"><h2 style="text-transform:capitalize">{{ $group }}</h2><div class="form-grid">
@foreach($items as $setting)
<div class="field {{ $setting->type==='textarea'?'full':'' }}"><label>{{ ucwords(str_replace('_',' ',$setting->key)) }}</label>
@if($setting->type==='textarea')<textarea class="textarea" name="settings[{{ $setting->key }}]">{{ old("settings.$setting->key",$setting->value) }}</textarea>
@elseif($setting->type==='image')<input class="input" value="{{ $setting->value }}" disabled><div class="muted" style="font-size:11px;margin-top:5px">Use branding uploads below to replace managed files.</div>
@else<input class="input" type="{{ in_array($setting->type,['email','url'])?$setting->type:'text' }}" name="settings[{{ $setting->key }}]" value="{{ old("settings.$setting->key",$setting->value) }}">
@endif</div>@endforeach
</div></section>
@endforeach
<section class="card panel mb16"><h2>Branding uploads</h2><div class="form-grid"><div class="field"><label>Logo</label><input class="input" type="file" name="logo" accept="image/*"></div><div class="field"><label>Favicon</label><input class="input" type="file" name="favicon" accept=".ico,.png,.svg"></div><div class="field"><label>Default social image</label><input class="input" type="file" name="social_image" accept="image/*"></div></div></section>
<button class="btn btn-primary" type="submit">Save settings</button>
</form>
@endsection
