<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use App\Categories;
use App\Http\Requests\SelectRequest;

class SearchController extends Controller
{
  //retourne la vue Search
  public function searchView()
  {
      return view('front/search');
  }

    //  SelectRequest
  public function searchAction(Request $request)
  {
        $search = $request->all();

        $categories = Categories::all();
        if (!empty($search['categorie_name']) && !empty($search['zip'])) {

              $id_categories = $search['categorie_name'];
              $zip_code = $search['zip'];

              $societies = \DB::table('society')

                  ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
                  ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
                  ->where('categories_society.categories_id' ,'=',$id_categories )
                  ->where('society.zip_code','=',$zip_code)
                  ->where('society.moderation','=', 'valide')
                  ->get();

    } elseif(!empty($search['categorie_name'])){
        $id_categories = $search['categorie_name'];

        $societies = \DB::table('society')

            ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
            ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
            ->where('categories_society.categories_id' ,'=',$id_categories )
            ->where('society.moderation','=', 'valide')
            ->select('society.*', 'categories.categorie_name')
            ->get();

    }
    elseif(!empty($search['zip'])){
        $zip_code = $search['zip'];
        $societies = Society::where('zip_code','=',$zip_code)
          ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
          ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
          ->where('society.moderation','=', 'valide')
          ->select('society.*', 'categories.*')
          ->get();

    }
    else {
      return redirect()->route('home')->with('danger', 'Veuillez entrer au moins un paramètre de recherche');
    }

    return view('front/search' ,compact('categories', 'societies'));

  }
}
