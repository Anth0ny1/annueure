<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireSocietyRequest extends FormRequest
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
             'name_society'   => 'bail|required|between:5,20',
             'adress'   => 'bail|required|between:5,150',
             'city'   => 'bail|between:5,20|alpha',
             'phone'   => 'phone:AUTO,FR',
             'zip_code'   => 'bail|numeric',
             'site_web'   => 'bail|required|min:3|max:50',
             'email'   => 'bail|required|min:3|max:50',
             'siren'   => 'bail|required|min:9|max:9'
         ];
     }
     public function messages()
       {
           return [
             'name.required' => 'Merci de mettre votre nom svp',
             'lastname.min' => 'Merci d\'indiquer un minimum de 3 caractères',
             'city.min' => 'Merci d\'indiquer un minimum de 3 caractères',
             'nom.min' => 'Merci d\'indiquer un minimum de 5 caractères',
           ];
     }

}
