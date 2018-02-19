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
     // public function footer(){
     //   $societies = Society::orderBy('created_at', 'desc')->limit(3)->get();
     //
     //   return view('layouts/front/footer', compact('societies'));
     // }
    public function index()
    {
      $selectCategories = Categories::get();

      $selectZip = Society::get();

      $users = User::orderBy('created_at', 'desc')->get();

      $count = \DB::table('society')->count();

      $id = Auth::id();

      $mycountsociety = Society::where('user_id' ,  '=', $id)->count();

      $societelimit3 = Society::inRandomOrder()->limit(3)->get();


      $url = 'http://www.lemonde.fr/m-actu/rss_full.xml';

      $rss = simplexml_load_file($url);

      $michel = json_encode($rss);

      // dd($michel);
      // $urlFeed = "http://www.lemonde.fr/m-actu/rss_full.xml";
      // $urlFeed2 = "https://www.lequipe.fr/rss/actu_rss_Football.xml";
      //
      //         $rss = simplexml_load_file($urlFeed);
      //         $rss2 = simplexml_load_file($urlFeed2);
      //
      //         $tableauInfos = array();
      //         $tableauInfos2 = array();
      //
      //         for($leCompteur=0; $leCompteur<2; $leCompteur++)
      //         {
      //           $tableauInfos[$leCompteur]['pubDate'] =  $rss->channel->item[$leCompteur]->pubDate;
      //           $tableauInfos[$leCompteur]['description'] =  $rss->channel->item[$leCompteur]->description;
      //             // echo '<br>';
      //             // $tableauInfos[$leCompteur]['Ancre'] =  substr($rss->channel->item[$leCompteur]->title, 0, $longueurMax-3);
      //         }
      //
      //         for($leCompteur=0; $leCompteur<2; $leCompteur++)
      //         {
      //           $tableauInfos2[$leCompteur]['pubDate'] =  $rss2->channel->item[$leCompteur]->pubDate;
      //           $tableauInfos2[$leCompteur]['description'] =  $rss2->channel->item[$leCompteur]->description;
      //             // echo '<br>';
      //             // $tableauInfos[$leCompteur]['Ancre'] =  substr($rss->channel->item[$leCompteur]->title, 0, $longueurMax-3);
      //         }
      //         // return($tableauInfos);
      //           // dd($tableauInfos);
      //           foreach ($tableauInfos as $tableauInfo) {
      //             // print_r() $value
      //             $tableauInfo['pubDate'];
      //             echo '<br>';
      //
      //             echo $tableauInfo['description'];
      //             echo '<br>';
      //           }
      //
      //           foreach ($tableauInfos2 as $tableauInfo2) {
      //             // print_r() $value
      //             $tableauInfo2['pubDate'];
      //             echo '<br>';
      //             // if ($tableauInfo2) {
      //             //   # code...
      //             // }
      //             echo $tableauInfo2['description'];
      //             echo '<br>';
      //           }
      //
      //           $michel = array_merge($tableauInfo, $tableauInfo2);
      //
      //           dd($michel);


                // usort($michel, $michel['pubDate']);
              // foreach ($tableauInfos as $key => $value) {
              // }

      // $societies = Society::orderBy('created_at', 'desc')->limit(3)->get();

        return view('home', compact('users', 'count', 'societies', 'selectCategories', 'selectZip', 'mycountsociety', 'societelimit3'));
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
