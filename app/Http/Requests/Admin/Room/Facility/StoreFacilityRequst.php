<?php

namespace App\Http\Requests\Admin\Room\Facility;

use Illuminate\Foundation\Http\FormRequest;

class StoreFacilityRequst extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'icon' => ['required', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'status' => ['required', 'boolean']
        ];
    }
}
