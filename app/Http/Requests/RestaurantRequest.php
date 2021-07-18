<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'address' => 'string|required|min:3',
            'city' => 'string|required|min:3',
            'telephone' => 'string|required|min:5',
            'pIva' => 'string|required|min:5',
            'img' => 'nullable|mimes:jpg,bmp,png,jpeg',
            'categories' => 'required|array',
            'categories.*' => 'required|distinct',
        ];
    }
}
