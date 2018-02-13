<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Categories;


class AdminListingCategories extends Controller
{
    //
  public function listingCategories(){



     return view('admin/users');




    $categories = Categories::orderBy('created_at', 'desc')->paginate(15);

    // $user = User::


    return view('listing_categories', compact('categories'));


    return view('admin/listing-categories', compact('categories'));


 }
}
