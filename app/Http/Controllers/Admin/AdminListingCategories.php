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
=======




>>>>>>> 203deebfd36fe9d947ad7d59098003efc51c3658

    $categories = Categories::orderBy('created_at', 'desc')->paginate(15);

    // $user = User::


<<<<<<< HEAD
=======
    return view('admin/listing-categories', compact('categories'));



>>>>>>> 203deebfd36fe9d947ad7d59098003efc51c3658

 }
}
