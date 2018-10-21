<?php

namespace CodeShopping\Http\Requests;

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
                    'required|name'=>'max:255',
    	            'required|description'=>'max:1000',
                    'required|price'=>'numeric',
                    'required|stock'=> 'integer|gt:0',
                    'required|active'=>'boolean' 
        ];
    }
}
