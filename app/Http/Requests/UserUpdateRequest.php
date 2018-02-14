<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserUpdateRequest extends FormRequest
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
//       $user = User::find($this->user);
// dd($user);

        return [
          'name'     => 'required|min:3|max:50',
          'lastname' => 'required|min:3|max:50',
          'city'     => 'required|min:3|max:50',
          'email'    => 'required|string|email|max:255|unique:users, email,' . $request->get('email'),
          'role'     => 'required|in:actif,inactif',
        ];
    }
}
