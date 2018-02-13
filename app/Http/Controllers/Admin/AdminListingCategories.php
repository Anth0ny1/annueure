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
     return view('admin/users');
=======

    $categories = Categories::orderBy('created_at', 'desc')->paginate(15);

    // $user = User::

    return view('listing_categories', compact('categories'));

>>>>>>> 9f1a87de8d337882454067a34e9c6cf60d301e9c
 }
}
