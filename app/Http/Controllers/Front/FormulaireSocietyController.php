<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\FormulaireSocietyRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;
use App\Categories;
use App\Society;

class FormulaireSocietyController extends Controller
{
    public function createSociety()
    {
      // $categories = Categories::All();
      $categories = \DB::table('categories')->get();
      // dd($categories->categorie_name);
      // $user = User::
          return view('front/formulaire-societe', compact('categories'));
    }
    
    public function createSocietyAction(FormulaireSocietyRequest $request)
      {
        $post = $request->all();

        $ids = array();

        foreach($post['categorie_name'] as $idCat) { $ids[] = $idCat; }

        $id = \DB::table('society')->insertGetId(
            [
              "name_society" => $post['name_society'],
              "gerant" => $post['gerant'],
              "adress" => $post['adress'],
              "city" => $post['city'],
              "phone" => $post['phone'],
              "zip_code" => $post['zip_code'],
              "email" => $post['email'],
              "site_web" => $post['site_web'],
              "skills" => $post['skills'],
              "siren" => $post['siren'],
              'created_at' => Carbon::now(),
              'user_id' => Auth::id(),
            ]
          );
          $society = Society::findOrFail($id);
          $society->categories()->sync($ids);
          return redirect()->route('home')->with('success', 'votre formulaire est bien soumis');
    }

}
