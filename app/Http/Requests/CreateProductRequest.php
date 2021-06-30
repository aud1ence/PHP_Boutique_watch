<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'productName' => 'required',
            'productVendor' => 'required',
            'productDescription' => 'required',
            'productPrice' => 'required|numeric',
            'productImage' => 'required|file|image',
        ];
    }

    public function messages()
    {
        return [
            'productName.required' => 'Can not to be empty',
            'productName.max:50' => 'Dont transcend 50 character',
            'productDescription.required' => 'Can not to be empty',
            'productDescription.numeric' => 'Have to is number',
            'productImage.required' => 'Can not to be empty',
        ];
    }
}
