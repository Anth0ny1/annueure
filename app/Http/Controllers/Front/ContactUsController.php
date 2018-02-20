<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use Mail;
use App\Mail\SendMail;

class ContactUsController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('user');
    // }

    public function contactView(){
      return view('front/contactUs');
    }

    public function contactAction(ContactUsRequest $request){

      // dd($request->input());
      $variable = $request->input();

      Mail::to('anthonythi51@gmail.com')->send(new SendMail($variable));

      return redirect()->route('home')->with('success', 'Votre message à bien était envoyer, nous vous répondrons sous peu');
    }
}
