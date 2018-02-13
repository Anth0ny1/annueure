<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminUsersController extends Controller
{
    //
    public function updateUsers($id){
      $user = User::findOrFail($id);

      return view('admin/update-users', compact('user'));
    }

    public function updateUsersAction($id){

      $user = User::findOrFail($id);

      $user->update([
        'categorie_name' => $request->input('categorie_name'),
      ]);

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre categorie à bien était MODIFIE');
    }

    public function deleteUsers(){

    }
}
