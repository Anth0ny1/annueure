<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;

class AdminListingCategories extends Controller
{
    //
  public function listingCategories(){
<<<<<<< HEAD
    $categories = Categories::orderBy('created_at', 'desc')->paginate(15);

    // $user = User::

    // return view('listing_categories', compact('categories'));
=======
    $categories = Categories::all();
     return view('front/formulaire-societe', compact('categories'));
>>>>>>> 5d8d91d550b989be07ca9ae6b85200af9dc98b90
 }
}
