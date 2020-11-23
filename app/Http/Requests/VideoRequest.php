<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'name' => 'required|max:30|unique:videos',
            'slug' => 'required|max:30|unique:videos',
            'link' => 'required|max:200',
            'image' => 'required|image:jpeg,png,jpg,gif,svg|max:2048'
        ];
    }
}