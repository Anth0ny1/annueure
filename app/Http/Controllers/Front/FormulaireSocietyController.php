<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormulaireSocietyController extends Controller
{
    public function createSociety()
    {
          return view('front/formulaire-societe');
    }
}
