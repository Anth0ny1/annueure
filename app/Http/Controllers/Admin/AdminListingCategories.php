<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;


class AdminListingCategories extends Controller
{

  // lISTING DE TOUTES LES CATEGORIES 
  public function listingCategories(){

  $categories = Categories::orderBy('created_at', 'desc')->paginate(10);

    return view('admin/listing-categories', compact('categories'));
 }
}
