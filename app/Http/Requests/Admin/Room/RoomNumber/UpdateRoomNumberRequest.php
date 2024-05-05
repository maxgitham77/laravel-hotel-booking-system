<?php

namespace App\Http\Requests\Admin\Room\RoomNumber;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomNumberRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'room_nr' => ['required', 'numeric'],
            'status' => ['required', 'boolean'],
        ];
    }
}
