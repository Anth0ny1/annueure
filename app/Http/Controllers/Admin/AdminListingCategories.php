<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminListingCategories extends Controller
{
       public function listingCategories()
    {
        return view('listing-categories');
    }
}
