<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// requete
use App\Http\Requests\FormulaireRequest;


class FormulaireController extends Controller
{
  public function form()
  {
    return view('/formulaire/formulaire');
  }
  public function action(FormulaireRequest $request)
    {
        return redirect()->route('home')->with('success', 'votre formulaire est bien soumis');

        // $post = $request->all();
        // dd($post);

  }
}
