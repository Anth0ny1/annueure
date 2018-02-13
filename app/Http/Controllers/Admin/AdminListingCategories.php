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
>>>>>>> d4aa9cab3107a8a4bee3313fcfe682385a83c379

    $categories = Categories::orderBy('created_at', 'desc')->paginate(15);

    // $user = User::

    return view('listing_categories', compact('categories'));

<<<<<<< HEAD

=======
>>>>>>> d4aa9cab3107a8a4bee3313fcfe682385a83c379
 }
}
