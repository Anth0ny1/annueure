<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Route;

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
    public function rules()
    {
      // $user = User::find($this->user);
      // $id = Route::current()->getParameter('users');
// dd($user);
// dd($this->route('update-users-action')->getParameter('id'));
        return [
          'name'     => 'required|min:3|max:50',
          'lastname' => 'required|min:3|max:50',
          'city'     => 'required|min:3|max:50',
          // 'email'    => 'string|email|max:255|unique:users, email',
          'role'     => 'required|in:membre,admin',
          'status'   => 'required|in:actif,inactif',
        ];
    }
}
