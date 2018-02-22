<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminListingUsers extends Controller
{
    // LISTING DE TOUS LES UTILISATEURS
    //
    public function listingUsers()
    {
      $users = User::orderBy('created_at', 'desc')->paginate(10);

      return view('admin/listing-users', compact('users'));
    }
}
