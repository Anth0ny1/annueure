<?php

namespace App\Http\Requests;
use App\Society;
use Illuminate\Http\Request;

// use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class UpdateMySocietyRequest extends FormRequest
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
    public function rules(Request $request)
    {

    $d = $request->route()->parameters();
 // dd($request);
 //
 // siren
//       $society = Society::find($this->society);
//       dd($society);
        return [
          'name_society'   => 'bail|required|between:5,50',
          'adress'   => 'bail|required|between:5,150',
          'city'   => 'bail|required|between:5,30',
          'phone'   => 'phone:AUTO,FR',
          'zip_code'   => 'bail|required|numeric',
          'site_web'   => 'bail|max:50',
          // 'categorie_name'   => 'bail|required',
          'skills'   => 'bail|max:190',
          'email'   => 'bail|required|min:3|max:50',
          // 'siren'   => 'bail|required|min:9|max:9',
          'siren'    => 'required|min:9|max:9|unique:society,siren,'.$d['idSociety']

          //
          // 'logo' => 'optional',
        ];
    }
}
