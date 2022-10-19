<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareerRequest extends FormRequest
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
            'title'        => 'required|max:190',
            'slug'              => 'required|unique:pages|max:190',
            'location'           => 'required|max:255',
            'content'       => 'required|max:65535',
            'meta_title'        => 'required|max:190',
            'meta_keywords'     => 'max:65535',
            'meta_description'  => 'max:65535'
        ];
    }
}
