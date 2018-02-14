<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserUpdateRequest;

class AdminUsersController extends Controller
{
    //
    public function updateUsers($id){
      $user = User::findOrFail($id);

      return view('admin/update-users', compact('user'));
    }

    public function updateUsersAction($id, UserUpdateRequest $request){

      $user = User::findOrFail($id);

      $user->update([
        'name' => $request->input('name'),
        'lastname' => $request->input('lastname'),
        'city' => $request->input('city'),
        'email' => $request->input('email'),
        'status' => $request->input('status'),
      ]);

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre categorie à bien été MODIFIE');
    }

    public function deleteUsers(){

    }
}
