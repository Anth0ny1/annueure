<?php
/**
 *
 *
 *
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Society;
use App\User;
use App\Categories;
use Mail;
use App\Mail\ValideModeration;
use App\Mail\NonConformeModeration;

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin');
  }


  public function dashboard(){

  // COUNT DES SOCIETES
  // COUNT DES UTILISATEURS
  // COUNT DES CATEGORIES

  $sctcount = Society::all()->count();
  $usercount = User::all()->count();
  $catcount = Categories::all()->count();

  return view('admin.dashboard', compact('sctcount','usercount','catcount'));
  }

  // SI ON CLIQUE SUR LE BOUTON VALIDER ON ARRIVE SUR CETTE METHODE ET ON CHANGE LE STATUS DE MODERATION DE LA SOCIETE A VALIDE
  //
  public function valideModeration(Request $request,$idSociety){

    $society = Society::findOrFail($idSociety);
    $society->update([
      "moderation" => 'valide',
    ]);
    // dd($society);
    $variable = (array)$society['attributes'];
    // dd($variable);

    // dd($variable);

    Mail::to($society->email)->send(new ValideModeration($variable));

    return redirect()
      ->route('listing-society')
      ->with('success','société validée');
  }

  // SI ON CLIQUE SUR LE BOUTON NON CONFORME ON ARRIVE SUR CETTE METHODE ET ON CHANGE LE STATUS DE MODERATION DE LA SOCIETE A NON CONFORME
  //
  public function nonConformeModeration(Request $request,$idSociety){

    $society = Society::findOrFail($idSociety);
    $society->update([
      "moderation" => 'non conforme',
    ]);

    $variable = (array)$society['attributes'];
    // dd($variable);

    // dd($variable);

    Mail::to($society->email)->send(new nonConformeModeration($variable));

    return redirect()
      ->route('listing-society')
      ->with('danger','société non conforme');
  }
}
