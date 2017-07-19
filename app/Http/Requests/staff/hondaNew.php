<?php

namespace App\Http\Requests\staff;

use Illuminate\Foundation\Http\FormRequest;

class hondaNew extends FormRequest
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
           'model' => 'required|max:100',
            'price' => 'required|max:10',
            'desc' => 'required|max:150'
        ];
    }
}
