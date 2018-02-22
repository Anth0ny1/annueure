<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserUpdateRequest;

class AdminUsersController extends Controller
{

  // AFFICHAGE DU FORMUALIRE DE MODIFICATION DES UTILISATEURS
  //
  public function updateUsers($id){
    $user = User::findOrFail($id);

    return view('admin/update-users', compact('user'));
  }

  // ENREGISTREMENT DES DONNEES DU FORMULAIRE DE MODIFIATION UTILISATEURS EN BASE DE DONNEE
  //
  public function updateUsersAction(UserUpdateRequest $request, $id){

    $user = User::findOrFail($id);

    $user->update([
      'name'     => $request->input('name'),
      'lastname' => $request->input('lastname'),
      'city'     => $request->input('city'),
      'status'   => $request->input('status'),
      'role'     => $request->input('role'),
    ]);

    return redirect()
      ->route('listing-users')
      ->with('success', 'L\'utilisateur à bien été MODIFIE');
  }

    // SOFT DELETE D UN UTILISATEURS TOUJOURS PRESENT EN BASE DE DONNEE MAIS PLUS VISIBLE
    // 
    public function deleteUsers($id){

      $user = User::findOrFail($id);

      $user->delete();

      return redirect()
        ->route('listing-users')
        ->with('success', 'L\'utilisateur à bien était SUPPRIMER');
    }
}
