<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validar extends FormRequest
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
           
            'name' => 'required|string', 
            'username' => 'required|string',
            'email' => 'required|unique:users',
            'password' => 'required|string'
        ];
    }

public function messages()
{
    return [
        'name.required' => 'Campo obligatorio',
        'name.string' => 'este campo debe ser string',
        'username.required'  => 'Campo obligatorio',
        'username.string'  => 'este campo debe ser string',
        'email.required'  => 'El email es Campo obligatorio',
        'email.email'  => 'Debe ser formato email',
        'email.unique'  => 'este campo ya existe en nuestra base de datos',
        'password.required'  => 'Campo obligatorio'
    ];
}

//$this->validate($request, $rules, $messages);
//



}



          