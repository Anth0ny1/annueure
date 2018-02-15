<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use App\Categories;
use App\Http\Requests\SelectRequest;

class SearchController extends Controller
{

  public function searchView()
  {
      return view('front/search');
  }

  public function searchAction(SelectRequest $request)
  {
      $search = $request->all();

    $categories = Categories::all();
    if (!empty($search['categorie_name']) && !empty($search['zip'])) {

      $id_categories = $search['categorie_name'];
      $zip_code = $search['zip'];

      $count = 0;
      $categories = Categories::with('society')
        ->where('id', '=', $id_categories)
        // ->where('society.zip_code', '=', $zip_code)
        ->get();


      // $zips = Society::where('zip_code', '=', $search['zip'])->get();

      // dd($categories);
    }
    // dd($search);
    // if (!empty($search['zip'])) {
    //   // $id_zip = $search['zip'];
    //
    //   $zips = Society::where('zip_code', '=', $search['zip'])->get();
    //   // dd($zip);
    // }
      // $zipCode = Society::('society')->where('zip_code', '=', );
      // $count = \DB::table('categories')
      //                     ->where('categorie_name', 'like','%'.$search['categorie_name'].'%')
      //                     // ->where('zip_code','like', '%'.$search['ou'].'%')
      //                     ->count();
      // dd($search);
      //
      // $categories = \DB::table('categories')
      //                     ->where('id', '=', $search['categorie_name'])
      //                     // ->where('zip_code','like', '%'.$search['ou'].'%')
      //                     ->get();
      //
      //                     dd($categories);


                          // SELECT tout dans la table societe ou l'id
      // $society = \DB::table('society')
      //               ->where('')
    //
    // if (!empty($search['quiquoi'])) {
    //   $count = Society::where('name_society','like','%'.$search['quiquoi'].'%')->count();
    //   $quiquoiou = Society::where('name_society','like','%'.$search['quiquoi'].'%')->get();
    // }
    // elseif (!empty($search['ou'])) {
    //   $count = Society::where('zip_code','like','%'.$search['ou'].'%')->count();
    //   $quiquoiou = Society::where('zip_code','like','%'.$search['ou'].'%')->get();
    // }


    return view('front/search' ,compact('categories' ,'count', 'zips'));

      // $quiquoi = Society::
  }
}
