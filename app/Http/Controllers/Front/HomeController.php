<?php

/**
*  Affichage de 3 categories
*  Nombre de pro inscrit
*  3 Derniers pro inscrit
**/

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Categories;
use App\Society;
use Auth;
use App\Services\Rss;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     //requete sur page principale recherche - 3 categories au hasard - le nbre de sté

    public function index()
    {
      $selectCategories = Categories::get();
      $selectCategories1 = Categories::inRandomOrder()->limit(3)->get();

      $selectZip = Society::get();

      $count = \DB::table('society')->count();

      $id = Auth::id();

      $mycountsociety = Society::where('user_id' ,  '=', $id)->count();

        return view('home', compact( 'count', 'societies', 'selectCategories', 'selectZip', 'mycountsociety', 'selectCategories1'));
    }

    // requete annuaire
    public function annuaire()
    {

      $categoriescount = \DB::table('categories')->count();

      $categories = Categories::with(['society' => function($query){
        $query->where('moderation', '=', 'valide');
      }])->get();

      return view('/front/annuaire',compact('categories', 'categoriescount'));
    }

    // UPDATE D UNE CATEGORIE
    public function profilSociete($id){
      $societies = Society::findOrFail($id);

      $categories = \DB::table('society')
        ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
        ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
        ->where('society.id', '=', $id)
        ->get();

      return view('/front/annuaire-profil', compact('societies', 'categories'));
    }

    //listing des categories
    public function listingByCategorie($categorieName){


      $categorie = \DB::table('society')
        ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
        ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
        ->where('categorie_name','=',$categorieName)
        ->get();

      return view('front/listingByCategorie', compact('categorie'));
    }

}
