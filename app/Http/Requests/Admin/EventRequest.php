<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        $eventId = $this->route('event')?->id;

        return [

            /*
            |--------------------------------------------------------------------------
            | Required only for connecting gallery to event
            |--------------------------------------------------------------------------
            */

            'title' => [
                'required',
                'string',
                'max:255',
            ],

            'slug' => [
                'required',
                'string',
                'max:255',

                Rule::unique(
                    'events',
                    'slug'
                )->ignore($eventId),
            ],

            'event_cycle_id' => [
                'nullable',
                'exists:event_cycles,id',
            ],

            'status' => [
                'required',
                Rule::in([
                    'draft',
                    'published',
                    'archived',
                ]),
            ],

            'is_past' => [
                'nullable',
                'boolean',
            ],

            'sort_order' => [
                'nullable',
                'integer',
                'min:0',
            ],


            /*
            |--------------------------------------------------------------------------
            | Existing optional event fields
            |--------------------------------------------------------------------------
            |
            | We keep these valid in case later you want to use the full CMS.
            |
            */

            'event_date' => [
                'nullable',
                'date',
            ],

            'start_time' => [
                'nullable',
            ],

            'end_time' => [
                'nullable',
            ],

            'location' => [
                'nullable',
                'string',
                'max:255',
            ],

            'short_description' => [
                'nullable',
                'string',
            ],

            'description' => [
                'nullable',
                'string',
            ],

            'registration_url' => [
                'nullable',
                'url',
                'max:2048',
            ],

            'presentation_url' => [
                'nullable',
                'url',
                'max:2048',
            ],

            'video_url' => [
                'nullable',
                'url',
                'max:2048',
            ],

            'seo_title' => [
                'nullable',
                'string',
                'max:255',
            ],

            'seo_description' => [
                'nullable',
                'string',
            ],

            'seo_keywords' => [
                'nullable',
                'string',
            ],


            /*
            |--------------------------------------------------------------------------
            | Images
            |--------------------------------------------------------------------------
            */

            'hero_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],

            'poster_image' => [
                'nullable',
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],

            'gallery' => [
                'nullable',
                'array',
                'max:100',
            ],

            'gallery.*' => [
                'image',
                'mimes:jpg,jpeg,png,webp',
                'max:10240',
            ],
        ];
    }


    public function messages(): array
    {
        return [

            'title.required' =>
                'Please enter the event title.',

            'slug.required' =>
                'Please enter the event slug.',

            'slug.unique' =>
                'This event slug is already being used.',

            'event_cycle_id.exists' =>
                'The selected event cycle is invalid.',

            'gallery.max' =>
                'You can upload a maximum of 100 images at one time.',

            'gallery.*.image' =>
                'Every gallery file must be an image.',

            'gallery.*.mimes' =>
                'Gallery images must be JPG, PNG or WebP.',

            'gallery.*.max' =>
                'Each gallery image must be smaller than 10 MB.',

        ];
    }
}
