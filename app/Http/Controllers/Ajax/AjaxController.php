<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class AjaxController extends Controller
{
    public function __construct(){
      //$this->middleware('ajax');
    }

    public function getAllUser(){
       // $users = User::all();
      // $v = '';

      // foreach ($users as $user) {
      //   $v .= $user->name. ',';
      // }

      $v = 'CHAINE TEST';
      return response()->json(array('v' => $v));
    }

    public function contactUs(){
      
    }
}
