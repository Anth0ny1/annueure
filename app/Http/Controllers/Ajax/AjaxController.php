<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AjaxController extends Controller
{
    public function __construct()
    {
      $this->middleware('ajax');
    }
    public function getallUser()
    {
      $users = User::all();
      $v = '';
      foreach ($users as $user) {
        $v .= $user->name. ',';
      }


      return response()->json(array('v' => $v));

    }
}
