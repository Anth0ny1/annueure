<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    //
    public function contactView(){
      return view('contactUs');
    }

    public function contactAction(){
      return redirect()->route('home')->with('success', 'Votre message à bien était envoyer, nous vous répondrons sous peu');
    }
}
