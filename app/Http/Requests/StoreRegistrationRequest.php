<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'field_1' => ['required', 'string', 'max:150'],
            'field_2' => ['required', 'string', 'max:60'],
            'field_3' => ['required', 'email', 'max:190'],
            'field_4' => ['required', 'string', 'max:40'],
            'field_5' => ['nullable', 'string', 'max:40'],
            'field_6' => ['required', 'string', 'max:150'],
            'field_7' => ['required', 'string', 'max:60'],
            'field_8' => ['nullable', 'date'],
            'field_9' => ['nullable', 'string', 'max:30'],
            'prev_participation' => ['nullable', 'in:yes,no,first_time'],
            'field_13' => ['required', 'string', 'max:100'],
            'comm_method' => ['nullable', 'in:whatsapp,phone,email'],
            'field_17' => ['nullable', 'string', 'max:150'],
            'field_18' => ['nullable', 'string', 'max:40'],
            'field_19' => ['required', 'string', 'max:100'],
            'looking_forward' => ['nullable', 'array'],
            'looking_forward.*' => ['string', 'max:40'],
            'field_26' => ['nullable', 'string', 'max:3000'],
            'field_27' => ['accepted'],
            'event_id' => ['nullable', 'integer', 'exists:events,id'],
        ];
    }
}
