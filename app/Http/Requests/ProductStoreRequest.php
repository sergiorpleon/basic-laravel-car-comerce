<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
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
        $rules = [
            'name'=>'required',
            'category_id'=>'required|integer',
            'tags'=>'required|array',
            'extract'=>'required',
            'visible'=>'required|in:TRUE,FALSE',
        ];

        if($this->get('image')){
            $rules = array_merge($rules, ['image' => 'mimes:jpg,jpeg,png']);
        }
        return $rules;
    }
}
