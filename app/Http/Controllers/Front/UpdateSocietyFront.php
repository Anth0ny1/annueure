<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use Auth;
use App\Categories;
use App\Http\Requests\UpdateMySocietyRequest;
use App\Services\PathUpload;


class UpdateSocietyFront extends Controller
{

  public function viewMySociety(){
    $id = Auth::id();
    // $mysociety = Society::findOrFail($id);
    $mysociety = Society::where('user_id' ,  '=', $id)->get();
    // $mycategory = Categories::where('user_id' ,  '=', $id)->get();
    $mycountsociety = Society::where('user_id' ,  '=', $id)->count();
    // $mysociety2 = Society::All();

if ($mycountsociety == 0) {
  return redirect()->route('formulaire-societe');
}else
    return view('/front/mes-societes' ,compact('id','mysociety','mycountsociety','mycategory'));
  }

  public function updateMySociety($idSociety){
    $societyUpdate = Society::findOrFail($idSociety);

    $actual_id = Auth::id();

    // dd($actual_id);
    // Selectionne dans la base SOCIETY toutes les societe qui ont le user id = a l'auth::id
    //
    $categories = Categories::all();

    // $societyUpdate = Society::

    $societyUpdate = Society::where('user_id', '=', $actual_id)->where('id', '=', $idSociety)->get();

    // dd($societyUpdate);
    return view('front/updateMySociety', compact('societyUpdate', 'categories'));

  }

  public function updateMySocietyAction(UpdateMySocietyRequest $request, $idSociety){

    $societyUpdaAction = Society::findOrFail($idSociety);

    // $actual_id = Auth::id();
    // dd('fdsfdsf');
    if (!empty($request->file('logo'))) {
      # code...

    $path = new PathUpload($request->file('logo'), 'society');
    // dd($path);

    $request->file('logo')->move(public_path($path->path()), $path->imageName());

      Society::where('id', '=', $idSociety)
      ->update([
          'name_society' => $request->input('name_society'),
          'gerant' => $request->input('gerant'),
          'adress' => $request->input('adress'),
          'city' => $request->input('city'),
          'zip_code' => $request->input('zip_code'),
          'phone' => $request->input('phone'),
          'site_web' => $request->input('site_web'),
          'skills' => $request->input('skills'),
          'email' => $request->input('email'),
          'siren' => $request->input('siren'),
          'path'           => $path->path(),
          'original_name'  => $path->originalName(),
          'image_name'     => $path->imageName(),
        ]);
    }
    else {
      Society::where('id', '=', $idSociety)
      ->update([
          'name_society' => $request->input('name_society'),
          'gerant' => $request->input('gerant'),
          'adress' => $request->input('adress'),
          'city' => $request->input('city'),
          'zip_code' => $request->input('zip_code'),
          'phone' => $request->input('phone'),
          'site_web' => $request->input('site_web'),
          'skills' => $request->input('skills'),
          'email' => $request->input('email'),
          'siren' => $request->input('siren'),
          // 'path'           => $path->path(),
          // 'original_name'  => $path->originalName(),
          // 'image_name'     => $path->imageName(),
        ]);
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
