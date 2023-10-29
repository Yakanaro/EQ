<?php

namespace App\Http\Requests\Block;

use Illuminate\Foundation\Http\FormRequest;

class IndexBlockRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
        ];
    }
}
