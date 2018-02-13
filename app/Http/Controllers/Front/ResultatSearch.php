<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Categories;


class ResultatSearch extends Controller
{
   public function result()
   {
     // $users = User::orderBy('created_at', 'desc')->get();
     // $categories = Categories::inRandomOrder()->limit(3)->get();
     $count = \DB::table('society')->count();
      return view('front/search', compact( 'count'));
   }
}
