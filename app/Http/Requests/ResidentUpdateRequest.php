<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResidentUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname' => ['required'],
            'initials' => [],
            'surname' => ['required'],
            'email' => [''],
            'home_telephone' => [],
            'mobile_telephone' => [],
        ];
    }
}
