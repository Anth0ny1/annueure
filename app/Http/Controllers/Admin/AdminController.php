<?php
/**
 *
 *
 *
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function dashboard(){
      $society = Society::orderBy('created_at', 'desc')->paginate(5);

      return view('dashboard', compact('society'));
    }
}
