<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{

  public function searchView()
  {
      return view('front/search');
  }

  public function searchAction()
  {
      // return view('search');
      
  }
}
