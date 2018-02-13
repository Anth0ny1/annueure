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
        // dd($post);

        $id = \DB::table('society')->insertGetId(
            [
<<<<<<< HEAD
              'name_society' => $post['name_society'],
              'adress' => $post['adress'],
              'city' => $post['city'],
              'phone' => $post['phone'],
              'zip_code' => $post['zip_code'],
              'email' => $post['email'],
              'site_web' => $post['site_web'],
              'siren' => $post['siren'],
=======
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
>>>>>>> 492a4bd9518aa0de087f0090822a63d1700a6979
              'created_at' => Carbon::now(),
              'user_id' => Auth::id(),
            ]
          );
          \DB::table('society_categories')->insert(
            [
<<<<<<< HEAD
            'categories_id' => $post['categorie_name'],
            // 'society_id' =>
            // 'user_id' => Auth::id(),
=======
            "categories_id" => $post['categorie_name'],
>>>>>>> 492a4bd9518aa0de087f0090822a63d1700a6979
            'society_id' => $id,
            ]
          );
          return redirect()->route('home')->with('success', 'votre formulaire est bien soumis');
    }

    public function listingCategoriesAll(){

      // $categories = Categories::all();
      // // dd($categories);
      // // $user = User::
      //
      // return compact('categories');

   }
}
