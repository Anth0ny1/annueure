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

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $selectCategories = Categories::get();
      $selectZip = Society::get();

      $users = User::orderBy('created_at', 'desc')->get();

      $count = \DB::table('society')->count();


      $categories = Categories::inRandomOrder()->limit(3)->get();

        return view('home', compact('users', 'count', 'categories', 'selectCategories', 'selectZip'));
    }

    public function annuaire()
    {
      // $societies = Society::all();
      $categoriescount = \DB::table('categories')->count();
      $categories = Categories::with('society')->get();
      return view('/front/annuaire',compact('categories', 'categoriescount'));
    }
    // UPDATE D UNE CATEGORIE

    public function profilSociete($id){
      $categorie = Categories::findOrFail($id);
      $societies = Society::findOrFail($id);

      return view('/front/annuaire-profil', compact('categorie','societies'));
    }

}
