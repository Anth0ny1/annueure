<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\FormulaireSocietyRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;
use App\Categories;
use App\Society;
use App\Services\PathUpload;
use Mail;
use App\Mail\ModerationSociety;


class FormulaireSocietyController extends Controller
{
  //////////////////////////////////////////////////////////////////////////////////////
  // methode permettant de recuperer toutes les categories pour le foreach de la page formulaire societe//
  //////////////////////////////////////////////////////////////////////////////////////

    public function createSociety()
    {
      $categories = Categories::get();
      return view('front/formulaire-societe', compact('categories'));
    }

    //////////////////////////////////////////////////////////////////////////////////////
    // methode permettant d'envoyer le formulaire soumis à la base de donnée avec conditions si le champs logo est rempli ou non  //
    //////////////////////////////////////////////////////////////////////////////////////

    public function createSocietyAction(FormulaireSocietyRequest $request)
    {
      $post = $request->all();
      $ids = array();

        foreach($post['categorie_name'] as $idCat) {
          $ids[] = $idCat;
        }

          if (!empty($request->file('logo'))) {

              $path = new PathUpload($request->file('logo'), 'society');

              $request->file('logo')->move(public_path($path->path()), $path->imageName());

              $id = \DB::table('society')->insertGetId(
                [
                  "name_society"  => $post['name_society'],
                  "gerant"        => $post['gerant'],
                  "adress"        => $post['adress'],
                  "city"          => $post['city'],
                  "phone"         => $post['phone'],
                  "zip_code"      => $post['zip_code'],
                  "email"         => $post['email'],
                  "site_web"      => $post['site_web'],
                  "skills"        => $post['skills'],
                  "siren"         => $post['siren'],
                  'created_at'    => Carbon::now(),
                  'path'          => $path->path(),
                  'original_name' => $path->originalName(),
                  'image_name'    => $path->imageName(),
                  'user_id'       => Auth::id(),
                ]
              );

            }else {

              $id = \DB::table('society')->insertGetId(
                [
                  "name_society"  => $post['name_society'],
                  "gerant"        => $post['gerant'],
                  "adress"        => $post['adress'],
                  "city"          => $post['city'],
                  "phone"         => $post['phone'],
                  "zip_code"      => $post['zip_code'],
                  "email"         => $post['email'],
                  "site_web"      => $post['site_web'],
                  "skills"        => $post['skills'],
                  "siren"         => $post['siren'],
                  'created_at'    => Carbon::now(),
                  'user_id'       => Auth::id(),
                ]
              );

            }

        $society = Society::findOrFail($id);
        $society->categories()->sync($ids);

        $variable = $request->input();

        Mail::to('anthonythi51@gmail.com')->send(new ModerationSociety($variable));

      return redirect()->route('mes-societes')->with('success', 'Merci votre société vient d\'être ajoutée ..');
    }

}
