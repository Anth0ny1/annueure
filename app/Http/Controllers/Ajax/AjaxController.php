<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Validator;
use Illuminate\Http\Request;
use App\User;
use Mail;
use App\Mail\SendMail;

class AjaxController extends Controller
{
    public function __construct(){
      $this->middleware('ajax');
    }

    public function contactUsAjax(Request $request){

      $validator = Validator::make($request->all(), [
              'nom' => 'required|min:5|max:200',
              'email'   => 'required|email',
              'sujet'   => 'required|min:5|max:50',
              'message' => 'required|min:5|max:1000',
          ]);

      if ($validator->fails()) {

        // dd($validator->errors());
        $errors = $validator->errors();

        return response()->json([
          'errStatus' => true,
          'nom' => $errors->first('nom'),
          'email' => $errors->first('email'),
          'sujet' => $errors->first('sujet'),
          'message' => $errors->first('message'),
        ]);
        // dd($validator);
        // return view('front/contactUs', compact('json'));
//
      }
      else {

         $variable = $request->input();
        // dd($variable);
         //$variable = 'dd';
         Mail::to('annueure@gmail.com')->send(new SendMail($variable));

         // $html = 'Votre message à bien été envoyer nous vous répondrons sous peu, merci à vous';

         return response()->json([
           'html' => 'Votre message a bien été envoyé, nous vous répondrons sous peu. Nous vous remercions.',
         ]);

        //
        // return redirect()->route('home')->with('success', 'Votre message a bien était envoyé, nous vous répondrons sous peu');
      }
    }
}
