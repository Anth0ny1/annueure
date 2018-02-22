<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MentionsController extends Controller
{
  // retourne la vue mentions legales
  public function mentions()
  {
    return view('front/mentions-legales');
  }
}
