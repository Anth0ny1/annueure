<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresentationController extends Controller
{
  // retourne la vue presentation
  public function presentation()
  {
    return view('front/presentation');
  }
}
