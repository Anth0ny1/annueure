<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminListingUsers extends Controller
{
    public function listingUsers()
    {
<<<<<<< HEAD
        return view('admin/users');
=======
      $users = User::orderBy('created_at', 'desc')->paginate(10);
      // $user = User::

      return view('listing_users', compact('users'));
>>>>>>> 9f1a87de8d337882454067a34e9c6cf60d301e9c
    }
}
