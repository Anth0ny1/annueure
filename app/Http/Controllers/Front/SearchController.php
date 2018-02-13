<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
class SearchController extends Controller
{

  public function searchView()
  {
      return view('front/search');
  }

  public function searchAction(Request $request)
  {
      // return view('search');
      //
      // Metier
      // nom de societe
      //
      // Code postaux
      // Ville
      $search = $request->all();
      // dd($search);
    // $search = Society::select('name_society')->all(); //<-- we use global request to get the param of URI
    $count = Society::where('name_society','like','%'.$search['quiquoi'].'%')->count();

    $quiquoi = Society::where('name_society','like','%'.$search['quiquoi'].'%')->get();
        // ->orderBy('name_society')
        // ->paginate(20);
      // dd($quiquoi);
    return view('front/search' ,compact('quiquoi','count'));

      // $quiquoi = Society::
  }
}
