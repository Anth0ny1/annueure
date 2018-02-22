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

class AdminController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
    $this->middleware('admin');
  }


  public function dashboard(){
    // $societies = Society::orderBy('created_at', 'desc')->paginate(5);

    // $user = User::
$sctcount = Society::all()->count();
$usercount = User::all()->count();
$catcount = Categories::all()->count();
    return view('admin.dashboard', compact('societies','sctcount','usercount','catcount'));
  }

  public function valideModeration(Request $request,$idSociety){



$post = $request->all();


// dd($request);
// dd($post);

    $society = Society::findOrFail($idSociety);



    $society->update([
      "moderation" => 'valide',
    ]);




  return redirect()->route('listing-society')->with('success','société validée');
  }
  public function nonConformeModeration(Request $request,$idSociety){
        $post = $request->all();
        $society = Society::findOrFail($idSociety);
        $society->update([
          "moderation" => 'non conforme',
        ]);

        return redirect()->route('listing-society')->with('danger','société non conforme');
      }
}
