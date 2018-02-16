<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UpdateSocietyFront extends Controller
{

  public function viewMySociety(){


    return view('/front/mes-societes');
  }

  public function updateMySociety(){

    return 'ok updateMySociety';
  }

  public function updateMySocietyAction(){

    return 'ok updateMySocietyAction';
  }

  public function deleteMySociety(){

    return 'ok deleteMySociety';
  }
}
