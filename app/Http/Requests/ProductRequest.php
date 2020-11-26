<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'max:30|unique:products',
            'slug' => 'max:30|unique:products',
            'description' => 'string',
            'price' => 'numeric|regex:/^(\d+(?:[\.\,]\d{1,2})?)$/',
            'image' => 'max:2048'
        ];
    }
}
