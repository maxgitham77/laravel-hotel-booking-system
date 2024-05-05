<?php

namespace App\Http\Requests\Admin\Room;

use Illuminate\Foundation\Http\FormRequest;

class updateRoomRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => ['nullable', 'image', 'max:3000'],
            'room_name' => ['required', 'string', 'max:255', 'unique:rooms,room_name,'.$this->room],
            'roomtype_id' => ['required', 'string'],
            'roomnumber_id' => ['required', 'string'],
            'number_of_adult' => ['required', 'string'],
            'number_of_children' => ['required', 'string'],
            'room_capacity' => ['required'],
            'price' => ['required'],
            'discount' => ['required'],
            'size' => ['required'],
            'bed_size' => ['required'],
            'view' => ['nullable', 'string'],
            'facilities.*' => [],
            'short_description' => ['required', 'max:255'],
            'description' => ['required'],
            'smoking_allowed' => ['required', 'boolean'],
            'cooking_allowed' => ['required', 'boolean'],
            'status' => ['required', 'boolean'],
        ];
    }
}
