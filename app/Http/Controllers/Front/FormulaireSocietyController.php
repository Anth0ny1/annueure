<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests\FormulaireSocietyRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Auth;
use App\Categories;
use App\Society;
use App\Services\PathUpload;
use Mail;
use App\Mail\ModerationSociety;


class FormulaireSocietyController extends Controller
{
    // public function __construct(){
    //   $this->middleware('isLogged');
    // }

    public function createSociety()
    {
      // $categories = Categories::All();
      $categories = Categories::get();
      // dd($categories->categorie_name);
      // $user = User::
          return view('front/formulaire-societe', compact('categories'));
    }

    public function createSocietyAction(FormulaireSocietyRequest $request)
      {
        $post = $request->all();
        $ids = array();

        foreach($post['categorie_name'] as $idCat) {
          $ids[] = $idCat;
        }
       //

       // dd($request);
       if (!empty($request->file('logo'))) {
         // dd($post);
       //
       //

         $path = new PathUpload($request->file('logo'), 'society');
         // dd($path);
         $request->file('logo')->move(public_path($path->path()), $path->imageName());
       //


       $id = \DB::table('society')->insertGetId(
           [
             "name_society" => $post['name_society'],
             "gerant" => $post['gerant'],
             "adress" => $post['adress'],
             "city" => $post['city'],
             "phone" => $post['phone'],
             "zip_code" => $post['zip_code'],
             "email" => $post['email'],
             "site_web" => $post['site_web'],
             "skills" => $post['skills'],
             "siren" => $post['siren'],
             'created_at' => Carbon::now(),
             'path'           => $path->path(),
             'original_name'  => $path->originalName(),
             'image_name'     => $path->imageName(),
             'user_id' => Auth::id(),
           ]
         );


       }
       else {


         $id = \DB::table('society')->insertGetId(
             [
               "name_society" => $post['name_society'],
               "gerant" => $post['gerant'],
               "adress" => $post['adress'],
               "city" => $post['city'],
               "phone" => $post['phone'],
               "zip_code" => $post['zip_code'],
               "email" => $post['email'],
               "site_web" => $post['site_web'],
               "skills" => $post['skills'],
               "siren" => $post['siren'],
               'created_at' => Carbon::now(),
               'user_id' => Auth::id(),
             ]
           );


       }

       $society = Society::findOrFail($id);
       $society->categories()->sync($ids);
       // $variable = [];
       // dd($variable);
       //
       // $variable .= $id;
       $variable = $request->input();
       Mail::to('anthonythi51@gmail.com')->send(new ModerationSociety($variable));

          return redirect()->route('mes-societes')->with('success', 'Merci votre société vient d\'être ajoutée ..');
    }

}
