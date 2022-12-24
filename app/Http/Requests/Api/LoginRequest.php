<?php

namespace App\Http\Requests\Api;

use App\Http\Requests\Api\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => [
                'required',
                'between:6,60',
                'email',
            ],
            'password' => [
                'required'
            ],
        ];
    }
}
