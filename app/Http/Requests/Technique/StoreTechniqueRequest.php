<?php

namespace App\Http\Requests\Technique;

use Illuminate\Foundation\Http\FormRequest;

class StoreTechniqueRequest extends FormRequest
{
    public function rules()
    {
        return [
            'description' => 'required|text',
        ];
    }
}
