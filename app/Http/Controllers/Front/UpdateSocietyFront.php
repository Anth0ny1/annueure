<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use Auth;
use App\Categories;
use App\Http\Requests\UpdateMySocietyRequest;
use App\Services\PathUpload;
use Mail;
use App\Mail\ModerationSociety;



class UpdateSocietyFront extends Controller
{
  // requete view mes societes
  public function viewMySociety(){
    $id = Auth::id();

    $mysociety = Society::where('user_id' ,  '=', $id)->get();

    $mycountsociety = Society::where('user_id' ,  '=', $id)->count();

    $mycountsocietymoder = Society::where('moderation' ,  '=', 'new')->where('user_id' ,  '=', $id)->count();

    if ($mycountsociety == 0) {
      return redirect()->route('formulaire-societe');
      } else {
        return view('/front/mes-societes' ,compact('id','mysociety','mycountsociety','mycategory','mycountsocietymoder'));
      }
    }
    //requetes pour updater la societes
  public function updateMySociety($idSociety){
    $societyUpdate = Society::findOrFail($idSociety);

    $actual_id = Auth::id();

    $categories = Categories::all();

    $societyUpdate = Society::where('user_id', '=', $actual_id)->where('id', '=', $idSociety)->get();

    return view('front/updateMySociety', compact('societyUpdate', 'categories'));

  }
//requetes pour updater la societes
  public function updateMySocietyAction(UpdateMySocietyRequest $request, $idSociety){

    $societyUpdaAction = Society::findOrFail($idSociety);

    $moderation = Society::where('id', '=', $idSociety)->get();
    if (!empty($request->file('logo'))) {

    $path = new PathUpload($request->file('logo'), 'society');

    $request->file('logo')->move(public_path($path->path()), $path->imageName());

      Society::where('id', '=', $idSociety)
      ->update([
          'name_society'      => $request->input('name_society'),
          'gerant'            => $request->input('gerant'),
          'adress'            => $request->input('adress'),
          'city'              => $request->input('city'),
          'zip_code'          => $request->input('zip_code'),
          'phone'             => $request->input('phone'),
          'site_web'          => $request->input('site_web'),
          'skills'            => $request->input('skills'),
          'email'             => $request->input('email'),
          'siren'             => $request->input('siren'),
          'path'              => $path->path(),
          'original_name'     => $path->originalName(),
          'image_name'        => $path->imageName(),
        ]);
    }
    else {
      Society::where('id', '=', $idSociety)
      ->update([
          'name_society'      => $request->input('name_society'),
          'gerant'            => $request->input('gerant'),
          'adress'            => $request->input('adress'),
          'city'              => $request->input('city'),
          'zip_code'          => $request->input('zip_code'),
          'phone'             => $request->input('phone'),
          'site_web'          => $request->input('site_web'),
          'skills'            => $request->input('skills'),
          'email'             => $request->input('email'),
          'siren'             => $request->input('siren'),
        ]);
    }
    // dd($moderation);
    foreach ($moderation as $value) {
      if ($value->moderation == 'non conforme') {

        $variable = $request->input();

        Mail::to('anthonythi51@gmail.com')->send(new ModerationSociety($variable));

        return redirect()
          ->route('mes-societes')
          ->with('success', 'Votre societe à bien été soumise a la modération');
      }
    }

        return redirect()
          ->route('mes-societes')
          ->with('success', 'Votre societe à bien été modifié');
  }

  public function deleteMySociety($idSociety){
    $societyDelete = Society::findOrFail($idSociety);

    $societyDelete->delete();

    return redirect()->route('mes-societes')->with('success', 'votre société vient d\'être supprimée.');

  }
}
