<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebsiteSetting;
use App\Services\ActivityLogger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class SettingController extends Controller
{
    public function edit(): View
    {
        return view('admin.settings.edit', [
            'settings' => WebsiteSetting::orderBy('group')->orderBy('key')->get()->groupBy('group'),
        ]);
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'settings' => ['nullable', 'array'],
            'logo' => ['nullable', 'file', 'mimes:jpg,jpeg,png,webp,svg', 'max:4096'],
            'favicon' => ['nullable', 'file', 'mimes:ico,png,svg', 'max:1024'],
            'social_image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:4096'],
        ]);

        foreach ($request->input('settings', []) as $key => $value) {
            WebsiteSetting::where('key', $key)->update(['value' => is_scalar($value) ? (string) $value : null]);
        }

        foreach (['logo' => 'site_logo', 'favicon' => 'favicon', 'social_image' => 'default_social_image'] as $input => $key) {
            if ($request->hasFile($input)) {
                $setting = WebsiteSetting::firstOrCreate(
                    ['key' => $key],
                    ['group' => 'branding', 'type' => 'image', 'is_public' => true]
                );

                if ($setting->value && str_starts_with($setting->value, 'storage/')) {
                    Storage::disk('public')->delete(str_replace('storage/', '', $setting->value));
                }

                $path = $request->file($input)->store('site', 'public');
                $setting->update(['value' => 'storage/'.$path]);
            }
        }

        ActivityLogger::record('settings.update', null, 'Website settings updated');

        return back()->with('success', 'Settings saved.');
    }
}
