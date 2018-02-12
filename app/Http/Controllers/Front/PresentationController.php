<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PresentationController extends Controller
{
      public function presentation()
  {
    return view('front/presentation');
  }
}
