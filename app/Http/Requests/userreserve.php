<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userreserve extends FormRequest
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
            'lname' => 'required|max:15',
            'mname' => 'required|max:15',
            'fname' => 'required|max:15',
            'dob' => 'required|max:15',
            'email' => 'required|email',
            'contact'=> 'required|max:12',
            'addr' => 'required|max:100'
        ];
    }
}
