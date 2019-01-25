<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validar_a extends FormRequest
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
                'lastname' => 'required|string',
                'age' => 'required|integer',
                
            ];
        }


        public function messages()
        {
            return [
                
                'name.required' => 'Campo obligatorio',
                'lastname.string' => 'Campo obligatorio',
                'age.required'  => 'Campo obligatorio',
                'age.integer'  => 'Debe ser numérico',
                
            ];
        }









}// FIn de la clase Validar_a
