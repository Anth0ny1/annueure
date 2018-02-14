<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\FormulaireSocietyRequest;
use App\Society;
use App\Categories;
use Auth;


class AdminSocietyController extends Controller
{
    public function updateSociety($id)
    {
      $society = Society::findOrFail($id);
      $categories = Categories::all();
      return view('admin/update-society', compact('society', 'categories'));
    }



    public function updateSocietyAction($id, FormulaireSocietyRequest $request)
    {


      $society = Society::findOrFail($id);
      $post = $request->all();
      // dd($post);
      $society->update([
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
      ]);
      // $categories = Categories::findOrFail($id);
      $categories = Categories::All();
      // dd($categories);
      $categories->update(
        [
        "categories_id" => $post['categorie_name'],
        // 'society_id' => $id,
        ]
      );

/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////


// $id = \DB::table('society')->update(
//     [
//
//       "name_society" => $post['name_society'],
//       "gerant" => $post['gerant'],
//       "adress" => $post['adress'],
//       "city" => $post['city'],
//       "phone" => $post['phone'],
//       "zip_code" => $post['zip_code'],
//       // "email" => $post['email'],
//       "site_web" => $post['site_web'],
//       "skills" => $post['skills'],
//       // "siren" => $post['siren'],
//       // 'created_at' => Carbon::now(),
//       'user_id' => Auth::id(),
//     ]
//   );
//   \DB::table('society_categories')->update(
//     [
//
//     "categories_id" => $post['categorie_name'],
//     'society_id' => $id,
//     ]
//   );


  /////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////
  /////////////////////////////////////////////////////////////




          // $society->update($request->all());  // Methode fonctionnel mais pas dans tous les cas

    return redirect()
      ->route('listing-society')
      ->with('success', 'Votre categorie à bien était MODIFIE');
    }








    public function deleteSociety()
    {

    }
}
