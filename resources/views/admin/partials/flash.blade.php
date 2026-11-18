@if(session('success'))<div class="flash">{{ session('success') }}</div>@endif
@if($errors->any())
    <div class="error-list">
        <strong>Please correct the following:</strong>
        <ul style="margin:8px 0 0;padding-left:18px">@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
    </div>
@endif
