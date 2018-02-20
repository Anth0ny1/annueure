<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
class ContactUsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('user');
    }

    public function contactView(){
      return view('front/contactUs');
    }

    public function contactAction(ContactUsRequest $request){

      return redirect()->route('home')->with('success', 'Votre message à bien était envoyer, nous vous répondrons sous peu');
    }
}
