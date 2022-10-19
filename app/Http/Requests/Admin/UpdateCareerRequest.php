<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCareerRequest extends FormRequest
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
            // 'media_file_id'     => 'required',
            'title'        => 'required|max:190',
            'slug'              => 'required|unique:pages|max:190',
            'location'           => 'max:255',
            'content'       => 'max:65535',
            'meta_title'        => 'required|max:190',
            'meta_keywords'     => 'max:65535',
            'meta_description'  => 'max:65535'
        ];
    }
}
