<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Htpp\Society;

class UpdateSocietyFront extends Controller
{

  public function viewMySociety(){


    return 'ok viewMySociety';
  }

  public function updateMySociety(){

    // Selectionne dans la base SOCIETY toutes les societe qui ont le user id = a l'auth::id
    //
    $societyUpdate = Society::
    return view('front/updateMySociety');
  }

  public function updateMySocietyAction(){

    return 'ok updateMySocietyAction';
  }

  public function deleteMySociety(){

    return 'ok deleteMySociety';
  }
}
