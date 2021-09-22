<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'english_name' => 'required|string',
            'radius' => 'required|integer',
            'weight' => 'required|integer'
        ];
    }
}
