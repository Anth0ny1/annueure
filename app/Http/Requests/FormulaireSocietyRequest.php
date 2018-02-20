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
             'name_society'   => 'bail|required|between:5,50',
             'gerant'   => 'bail|required|between:5,50',
             'adress'   => 'bail|required|between:5,150',
             'city'   => 'required|between:5,30',
             'phone'   => 'phone:AUTO,FR',
             'zip_code'   => 'bail|numeric',
             'site_web'   => 'bail|max:50',
             'categorie_name'   => 'bail|required',
             'email'    => 'string|email|max:255|unique:society,email',
             'siren'    => 'bail|required|min:9|max:9|unique:society,siren',
             'skills'   => 'bail|max:190',
             // 'siren'   => 'bail|required|min:9|max:9'
         ];
     }
     public function messages()
       {
           return [
             'name_society.required' => 'Merci d\'indiquer le nom de votre société.',
             'adress.min' => 'Merci d\'indiquer votre adresse.',
             'city.min' => 'Merci d\'indiquer votre ville.',
             'zip_code.min' => 'Merci d\'indiquer votre code postal.',
             'categorie_name' => 'Merci d\'indiquer une categorie.',
             'skills.max' => 'Votre texte ne peut depasser 190 caractères ',
             'email.min' => 'Merci d\'indiquer votre email.',
             'siren.min' => 'Merci d\'indiquer un numéro de siren avec 9 chiffres.',
           ];
     }

}
