<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormulaireRequest extends FormRequest
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
            'name'   => 'required|min:3|max:50'
            'lastname'   => 'required|min:3|max:50'
            'city'   => 'required|min:3|max:50'
            'email'   => 'required|min:3|max:50'
        ];
    }
    public function messages()
      {
          return [
            'name.required' => 'Merci de mettre votre nom svp',
            'lastname.min' => 'Merci d\'indiquer un minimum de 3 caractères',
            'city.min' => 'Merci d\'indiquer un minimum de 3 caractères',
          ];
    }
}
