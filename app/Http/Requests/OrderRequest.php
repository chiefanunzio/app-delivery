<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'name' => 'string|required|min:3',
            'lastname' => 'string|required|min:3',
            'address' => 'string|required|min:3',
            'email' => 'string|required|min:3',
            'amount' => 'required',
            'product_id' => 'required|array',
            'product_id.*' => 'required',
        ];
    }
}
