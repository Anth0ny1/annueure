<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use App\Categories;

class AdminListingSociety extends Controller
{
    // LISTING DE TOUTES LES SOCIETES
    public function listingSociety()
    {
      $societiesbyid = Society::All();
      $societies = Society::orderBy('created_at', 'desc')->paginate(10);

      $categories = Categories::All();
      $categoriesby = Categories::orderBy('created_at', 'desc')->get();

      return view('admin/listing-society', compact('societies','categories','societiesbyid'));
    }
}
