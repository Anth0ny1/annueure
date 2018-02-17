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
      // dd($zip_code);
      $count = 0;
      $categories = Categories::with('society')
        ->where('id', '=', $id_categories)
        // ->where('society.zip_code', '=', $zip_code)
        ->get();

        foreach ($categories as $categorie) {
          $blbl = $categorie->categorie_name;
        }
        // dd($blbl);
        // dd($categories);

        // $society = ['zip_code' => $zip_code, 'categorie_name' => $blbl];
        $test = \DB::table('society')
          ->join('categories_society', 'society.id', '=', 'categories_society.categories_id')
          ->join('categories', 'categories.id', '=', 'categories_society.categories_id')
          ->select('society.*')
          ->where('zip_code', '=', $zip_code)
          // ->where('categorie_name', '=', $blbl)
          ->get();

          // dd($test);
      // $zips = Society::where('zip_code', '=', $search['zip'])->get();
      // $result = Society::where()
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


    return view('front/search' ,compact('categories' ,'count', 'zips', 'test'));

      // $quiquoi = Society::
  }
}
