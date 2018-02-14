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

    public function updateUsersAction(UserUpdateRequest $request, $id){

      $user = User::findOrFail($id);
      // dd($request);
      $user->update([
        'name' => $request->input('name'),
        'lastname' => $request->input('lastname'),
        'city' => $request->input('city'),
        // 'email' => $request->input('email'),
        'status' => $request->input('status'),
        'role' => $request->input('role'),
      ]);

      return redirect()
        ->route('listing-users')
        ->with('success', 'L\'utilisateur à bien été MODIFIE');
    }

    public function deleteUsers($id){
      $user = User::findOrFail($id);

      $user->delete();

      return redirect()
        ->route('listing-users')
        ->with('success', 'L\'utilisateur à bien était SUPPRIMER');
    }
}
