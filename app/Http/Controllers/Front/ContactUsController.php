<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUsRequest;
use Mail;
use App\Mail\SendMail;

class ContactUsController extends Controller
{
    public function contactView(){
      return view('front/contactUs');
    }

    //////////////////////////////////////////////////////////////////////////////////////
    // methode permettant d'envoyer un message sur la boite mail via la page contact us //
    //////////////////////////////////////////////////////////////////////////////////////

    public function contactAction(ContactUsRequest $request){

      $variable = $request->input();

      Mail::to('annueure@gmail.com')->send(new SendMail($variable));

      return redirect()->route('home')->with('success', 'Votre message a bien était envoyé, nous vous répondrons sous peu');
    }
}
