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
     // public function __construct()
     // {
     //     $this->middleware('user');
     // }

    private static function cmp( $a, $b ) {
      // if ($a == $b) {
      //     return 0;
      // }
      // return ($a < $b) ? -1 : 1;
        return strtotime($a['pubDate']) < strtotime($b['pubDate']);
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
      $selectCategories1 = Categories::inRandomOrder()->limit(3)->get();


      $selectZip = Society::get();

      $users = User::orderBy('created_at', 'desc')->get();

      $count = \DB::table('society')->count();

      $id = Auth::id();

      $mycountsociety = Society::where('user_id' ,  '=', $id)->count();

      $societelimit3 = Society::inRandomOrder()->limit(3)->get();


      // $rs = new Rss();
      // $array = $rs->Rss('http://www.lemonde.fr/m-actu/rss_full.xml', 2);
      //
      // $rs2 = new Rss();
      // $array2 = $rs2->Rss('https://www.lequipe.fr/rss/actu_rss_Football.xml', 3);
      //
      // $rs3 = new Rss();
      // $array3 = $rs3->Rss('http://www.batiweb.com/rss', 2);
      //
      // $rs4 = new Rss();
      // $array4 = $rs4->Rss('http://rss.maxifoot.com/football-general.xml', 15);
      //
      // $supermichel = $rs4->arrayMerge($array,$array2,$array3,$array4);
      // $supermichel = $rs4->arrayMerge($array, $array2, $array3, $array4);

      // dd($supermichel);
      // dd($array);
      // $url1 = 'http://www.lemonde.fr/m-actu/rss_full.xml';
      // $url2 = "https://www.lequipe.fr/rss/actu_rss_Football.xml";
      //
      // $rss1 = simplexml_load_file($url1);
      // $rss2 = simplexml_load_file($url2);
      //
      //
      // $michel1 = json_encode($rss1);
      // $michel2 = json_encode($rss2);
      //
      // $mich1 = json_decode($michel1, true);
      // $michou1 = array_slice($mich1['channel']['item'], 0, 2);
      //
      // $mich2 = json_decode($michel2, true);
      // $michou2 = array_slice($mich2['channel']['item'], 0, 2);
      //
      // $supermichel = array_merge($michou1, $michou2);
      //
      // // dd($michou1);
      // // dd($mich1['channel']['item']);
      // foreach ($supermichel as $key => $value) {
      //   echo $value['title'];
      //   echo $value['pubDate'];
      //   echo '<br>';
      // }
      //
      //
      // dd($supermichel);
      //   usort($supermichel, array($this, 'cmp'));
      //   // $micheltri = array_multisort($supermichel, SORT_ASC, SORT_NUMERIC);
      // // $michmich = array_slice($supermichel)
      // dd($supermichel);
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

        return view('home', compact('users', 'count', 'societies', 'selectCategories', 'selectZip', 'mycountsociety', 'societelimit3', 'selectCategories1'));
    }

    public function annuaire()
    {
      // $societies = Society::all();
      $categoriescount = \DB::table('categories')->count();
      $categories = Categories::with(['society' => function($query){
        $query->where('moderation', '=', 'valide');
      }])->get();

      // dd($categories);
      // $categories = Categories::with('society')->has('moderation', '=', 'valide')->get();
      // $categories = Categories::with([''])
      // $categories = \DB::table('categories')
      // ->join('categories_society', 'categories.id', '=', 'categories_society.categories_id' )
      // ->join('society', 'society.id', '=', 'categories_society.society_id')
      // // ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
      // // ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
      //  ->where('society.moderation','=','valide')
      //  ->select('society.*', 'categories.*')
      //  ->get();
      //  dd($categories);
      // $categories = \DB::table('society')
      // ->join( 'categories_society', 'society.id', '=', 'categories_society.society_id' )
      // ->join( 'categories', 'categories.id', '=', 'categories_society.categories_id' )
      //  ->where('society.moderation','=','valide')
      // ->get();
      // dd($categories);
      return view('/front/annuaire',compact('categories', 'categoriescount'));
    }
    // UPDATE D UNE CATEGORIE

    public function profilSociete($id){
      // $categorie = Categories::findOrFail($id);
      $societies = Society::findOrFail($id);

      return view('/front/annuaire-profil', compact('categorie','societies'));
    }

}
