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
             'categorie_name'   => 'bail|required',
             'skills'   => 'bail|max:190',
             'email'   => 'bail|required|min:3|max:50',
             'siren'   => 'bail|required|min:9|max:9'
         ];
     }
     public function messages()
       {
           return [
             'name_society.required' => 'Merci d\'indiquer le nom de votre société.',
             'adress.min' => 'Merci d\'indiquer votre adresse.',
             'city.min' => 'Merci d\'indiquer votre ville.',
             'zip_code.min' => 'Merci d\'indiquer votre code postal.',
             'site_web.min' => 'Merci d\'indiquer votre site internet.',
             'categorie_name' => 'Merci d\'indiquer une categorie.',
             'skills.max' => 'Votre texte ne peut depasser 190 caractères ',
             'email.min' => 'Merci d\'indiquer votre email.',
             'siren.min' => 'Merci d\'indiquer un numéro de siren avec 9 chiffres.',
           ];
     }

}
