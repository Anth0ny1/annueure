<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminListingUsers extends Controller
{
    public function listingUsers()
    {
      $users = User::orderBy('created_at', 'desc')->paginate(10);
      // $user = User::

      return view('listing_users', compact('users'));
    }
}
