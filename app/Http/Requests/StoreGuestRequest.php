<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "guests.*.name" => 'required|string|max:255',
            "guests.*.surname" => 'required|string|max:255',
            "guests.*.email" => 'nullable|email|string|max:255',
            "guests.*.phone" => 'nullable|string|max:255',
            "guests.*.is_lactose_free" => 'boolean',
            "guests.*.is_gluten_free" => 'boolean',
            "guests.*.is_vegetarian" => 'boolean',
            "guests.*.is_vegan" => 'boolean',
            "guests.*.is_child" => 'boolean',
            "guests.*.notes" => 'nullable|string|max:255',

        ];
    }
}
