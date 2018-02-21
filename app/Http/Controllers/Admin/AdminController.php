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

    return view('admin.dashboard', compact('societies'));
  }

  public function valideModeration(){
    dd('gfdgfdgfd')
  }

  public function nonConformeModeration(){
    return 'nonconf';

  }
}
