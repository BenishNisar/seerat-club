<!doctype html>
<html><body style="margin:0;background:#f3f5f1;font-family:Arial,sans-serif;color:#173b31">
<table role="presentation" width="100%" cellspacing="0" cellpadding="0" style="padding:28px 12px"><tr><td align="center">
<table role="presentation" width="640" cellspacing="0" cellpadding="0" style="max-width:640px;background:#fffdf8;border:1px solid #dce3dd;border-radius:18px;overflow:hidden">
<tr><td style="background:#173b31;color:#fff;padding:24px 28px"><div style="font-size:12px;letter-spacing:.12em;color:#d8c48b">SEERAT CLUB</div><h1 style="font-size:24px;margin:8px 0 0">{{ ucwords(str_replace('_',' ',$submissionType)) }}</h1></td></tr>
<tr><td style="padding:26px 28px"><p style="margin-top:0;color:#637169">A new website submission has been stored successfully in the Seerat Club database.</p>
<table role="presentation" width="100%" cellspacing="0" cellpadding="0">
@foreach($submissionData as $key=>$value)
@if(!in_array($key,['payload','user_agent','updated_at']))
<tr><td style="width:38%;padding:9px;border-bottom:1px solid #edf0ed;font-size:12px;font-weight:bold;color:#5d6b65">{{ ucwords(str_replace('_',' ',$key)) }}</td><td style="padding:9px;border-bottom:1px solid #edf0ed;font-size:13px">{{ is_array($value) ? implode(', ',$value) : ($value ?? '—') }}</td></tr>
@endif
@endforeach
</table>
</td></tr></table>
</td></tr></table>
</body></html>
