<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use Auth;
use App\Categories;

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

    // $societyUpdate = Society::

    $societyUpdate = Society::where('user_id', '=', $actual_id)->where('id', '=', $idSociety)->get();

    // dd($societyUpdate);
    return view('front/updateMySociety', compact('societyUpdate'));

  }

  public function updateMySocietyAction(){

    return 'ok updateMySocietyAction';
  }

  public function deleteMySociety($idSociety){
    $societyDelete = Society::findOrFail($idSociety);

    $societyDelete->delete();

    return redirect()->route('home')->with('success', 'votre société vient d\'être supprimée.');

  }
}
