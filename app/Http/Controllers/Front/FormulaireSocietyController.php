<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\FormulaireSocietyRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;


class FormulaireSocietyController extends Controller
{
    public function createSociety()
    {
          return view('front/formulaire-societe');
    }
    public function createSocietyAction(FormulaireSocietyRequest $request)
      {
        $post = $request->all();
        // dd($post);
        \DB::table('society')->insertGetId(
            [
              "name_society" => $post['name_society'],
              "adress" => $post['adress'],
              "city" => $post['city'],
              "phone" => $post['phone'],
              "email" => $post['email'],
              "site_web" => $post['site_web'],
              "siren" => $post['siren'],
              'created_at' => Carbon::now(),
              'user_id' => Auth::id()
            ]
          );
          // \DB::table('categories')->insertGetId(
          //   "categorie_name" => $post['categorie_name']
          // );
          return redirect()->route('home')->with('success', 'votre formulaire est bien soumis');



    }
}
