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
    public function index()
    {
      $selectCategories = Categories::get();

      $selectZip = Society::get();

      $users = User::orderBy('created_at', 'desc')->get();

      $count = \DB::table('society')->count();

      $id = Auth::id();

      $mycountsociety = Society::where('user_id' ,  '=', $id)->count();

      $categories = Categories::inRandomOrder()->limit(3)->get();


//       $url = "http://www.lemonde.fr/m-actu/rss_full.xml"; /* insérer ici l'adresse du flux RSS de votre choix */
//       $rss = simplexml_load_file($url);
//
//
// // $mich = $rss->channel->item;
//
// // dd($mich);
// foreach ($rss->channel->item as $mich) {
//   # code...
//   // $mich = $rss->channel->item;
//
//   $test = (array)$mich;
//
//   // echo '<pre>';
//   // print_r($test);
// }
//
// // $michel = array_slice($test, 0, 2);
// // dd($michel);
//       // dd($test);
//       echo '<ul>';
//       foreach ($rss->channel->item as $item){
//         // dd($item);
//         // $michel = array_slice($item, 0, 10);
//         // foreach ($michel as $test => $vam) {
//         //   echo $vam;
//         //   echo '<br>';
//         // }
//         // dd($item);
//
//         echo (string)$item->title;
//         // echo $item['title'];
//         echo '<br>';
//        // $datetime = date_create($item->pubDate);
//        // $date = date_format($datetime, 'd M Y, H\hi');
//        // echo '<li><a href="'.$item->link.'">'.utf8_decode($item->title).'</a> ('.$date.')</li>';
//       }
//       echo '</ul>';

        return view('home', compact('users', 'count', 'categories', 'selectCategories', 'selectZip', 'mycountsociety'));
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
