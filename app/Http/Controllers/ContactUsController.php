<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function contactView(){
      return view('front/contactUs');
    }

    public function contactAction(){
      return redirect()->route('home')->with('success', 'Votre message à bien était envoyer, nous vous répondrons sous peu');
    }
}
