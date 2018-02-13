<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminListingSociety extends Controller
{
    public function listingSociety()
    {
<<<<<<< HEAD
        return view('admin/society');
=======
      $societies = Society::orderBy('created_at', 'desc')->paginate(5);

      // $user = User::

      return view('listing_society', compact('societies'));    
>>>>>>> 9f1a87de8d337882454067a34e9c6cf60d301e9c
    }
}
