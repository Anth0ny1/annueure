<?php
/**
 *
 *
 *
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin');
  }


    public function dashboard(){
      $societies = Society::orderBy('created_at', 'desc')->paginate(5);

      // $user = User::

<<<<<<< HEAD
      return view('admin.dashboard', compact('society'));
=======
      return view('dashboard', compact('societies'));
>>>>>>> 9f1a87de8d337882454067a34e9c6cf60d301e9c
    }
}
