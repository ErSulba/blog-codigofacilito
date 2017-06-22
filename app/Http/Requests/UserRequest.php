<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
    	//por defecto viene false, acitvar a true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    	// las reglas vienen asi 'regla' => 'parametro:1|parametro:2|'
        return [
            'name' => 'min:4|max:120|required',
	        'email' => 'required'
        ];
    }
}
