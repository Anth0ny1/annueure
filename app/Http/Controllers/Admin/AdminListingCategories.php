<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;


class AdminListingCategories extends Controller
{
    //
  public function listingCategories(){
    $categories = Categories::all();
     return view('Front/formulaire-societe', compact('categories'));
 }
}
