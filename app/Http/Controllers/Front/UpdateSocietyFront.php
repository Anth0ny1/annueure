<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use Auth;

class UpdateSocietyFront extends Controller
{

  public function viewMySociety(){


    return view('/front/mes-societes');
  }

  public function updateMySociety($idSociety){
    $societyUpdate = Society::findOrFail($idSociety);

    $actual_id = Auth::id();

    // dd($actual_id);
    // Selectionne dans la base SOCIETY toutes les societe qui ont le user id = a l'auth::id
    //
    $societyUpdate = Society::where('user_id', '=', $actual_id)->where('id', '=', $idSociety)->get();

    // dd($societyUpdate);
    return view('front/updateMySociety', compact('societyUpdate'));
  }

  public function updateMySocietyAction(){

    return 'ok updateMySocietyAction';
  }

  public function deleteMySociety(){

    return 'ok deleteMySociety';
  }
}
