<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use App\Categories;

class AdminListingSociety extends Controller
{
    public function listingSociety()
    {

      $societies = Society::orderBy('created_at', 'desc')->paginate(5);
      $categories = Categories::All();
      // dd($categories );
      return view('admin/listing-society', compact('societies','categories'));

    }
}
