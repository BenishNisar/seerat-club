<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedbackRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:120'],
            'email' => ['nullable', 'email', 'max:190'],
            'phone' => ['nullable', 'string', 'max:40'],
            'relationship' => ['required', 'in:parent,student,volunteer,visitor,other'],
            'rating' => ['required', 'integer', 'between:1,5'],
            'topic' => ['nullable', 'string', 'max:120'],
            'message' => ['required', 'string', 'max:5000'],
            'permission_to_share' => ['nullable', 'boolean'],
        ];
    }
}
