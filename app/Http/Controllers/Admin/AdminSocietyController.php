<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateSocietyBackRequest;
use App\Society;
use App\Categories;
use Carbon\Carbon;
use Auth;


class AdminSocietyController extends Controller
{
  // AFFICHAGE DU FORMULAIRE DE MODIFICATION DE SOCIETE
  //
  public function updateSociety($id)
  {
    $society = Society::findOrFail($id);
    $categories = Categories::all();

    return view('admin/update-society', compact('society', 'categories'));
  }


  // ENREGISTREMENT DES DONNES DU FORMULAIRE DE MODIFICATION EN BASE DE DONNEE
  //
  public function updateSocietyAction(UpdateSocietyBackRequest $request, $id){

    $society = Society::findOrFail($id);
    $post = $request->all();

    $ids = array();

    foreach($post['categorie_name'] as $idCat) {
      $ids[] = $idCat;
    }

    $society->update([
      "name_society" => $post['name_society'],
      "gerant"       => $post['gerant'],
      "adress"       => $post['adress'],
      "city"         => $post['city'],
      "phone"        => $post['phone'],
      "zip_code"     => $post['zip_code'],
      "email"        => $post['email'],
      "site_web"     => $post['site_web'],
      "skills"       => $post['skills'],
      "siren"        => $post['siren'],
      "updated_at"   => Carbon::now(),
    ]);

    $society->categories()->sync($ids);

    return redirect()
      ->route('listing-society')
      ->with('success', 'Votre catégorie à bien été modifiée');

  }

  // SOFT DELETE D UNE SOCIETE (PLUS VISIBLE MAIS TOUJOURS PRESENTE EN BASE DE DONNEE)
    public function deleteSociety($id)
    {
        $society = Society::findOrFail($id);

        $society->delete();

        return redirect()
          ->route('listing-society')
          ->with('success', '');
    }

}
