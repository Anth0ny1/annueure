<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use Auth;

class UpdateSocietyFront extends Controller
{

  public function viewMySociety(){
    $id = Auth::id();
    // $mysociety = Society::findOrFail($id);
    $mysociety = Society::where('user_id' ,  '=', $id)->get();
    $mycountsociety = Society::where('user_id' ,  '=', $id)->count();
    // $mysociety2 = Society::All();
    return view('/front/mes-societes' ,compact('id','mysociety','mycountsociety'));
  }

  public function updateMySociety(){

    // Selectionne dans la base SOCIETY toutes les societe qui ont le user id = a l'auth::id
    //
    // $societyUpdate = Society::
    return view('front/updateMySociety');
  }

  public function updateMySocietyAction(){

    return 'ok updateMySocietyAction';
  }

  public function deleteMySociety(){

    return 'ok deleteMySociety';
  }
}
