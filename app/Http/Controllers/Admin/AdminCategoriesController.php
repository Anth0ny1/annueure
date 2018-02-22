<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Categories;
use App\Services\PathUpload;
use App\Http\Requests\NewCategoriesRequest;

class AdminCategoriesController extends Controller
{
    // AFFICHAGE DU FORMULAIRE DE CREATION DE CATEGORIE
    //
    public function newCategories(){

      return view('admin/new-categories');
    }

    // CREATION D UNE NOUVELLE CATEGORIE (ENREGISTREMENT EN BASE DE DONNEE)
    //
    public function newCategoriesAction(NewCategoriesRequest $request){

       $post = $request->all();

      if (!empty($request->file('image'))) {

        $path = new PathUpload($request->file('image'), 'categorie');
        $request->file('image')->move(public_path($path->path()), $path->imageName());

        $do = [
          'categorie_name' => $post['categorie_name'],
          'path_categorie' => $path->path(),
          'original_name'  => $path->originalName(),
          'image_name'     => $path->imageName(),
          'description'    => $path->description(),
          'created_at'     => Carbon::now(),
        ];
        $post = $request->all();


      } else {
        $do = [
          'categorie_name' => $post['categorie_name'],
          'created_at'     => Carbon::now(),
        ];
      }

      // ON INSERE LE TABLEAU $do EN FONCTION DE SES CLES VALEURS DANS LA BASE DE DONNEE
      //
      Categories::insert($do);

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre categorie à bien été ajoutée.');
    }

    // AFFICHE DU FORMULAIRE DE MODIFICATION DE CATEGORIE
    //
    public function updateCategories($id){
      $categorie = Categories::findOrFail($id);

      return view('admin/update-categories', compact('categorie'));
    }

    // ENREGISTREMENT DE LA MISE A JOUR DE LA CATEGORIE EN BASE DE DONNEE
    //
    public function updateCategoriesAction($id, NewCategoriesRequest $request){

      $categorie = Categories::findOrFail($id);

      $post = $request->all();

      // SI LE CHAMPS IMAGE N EST PAS VIDE
      //
     if (!empty($request->file('image'))) {


       $path = new PathUpload($request->file('image'), 'categorie');

       $request->file('image')->move(public_path($path->path()), $path->imageName());

       $do = [
         'categorie_name' => $post['categorie_name'],
         'path'           => $path->path(),
         'original_name'  => $path->originalName(),
         'image_name'     => $path->imageName(),
         'created_at'     => Carbon::now(),
       ];
       $post = $request->all();

        // SINON
        //
     } else {
       $do = [
         'categorie_name' => $post['categorie_name'],
         'created_at'     => Carbon::now(),
       ];
     }

     // ON UPDATE LE TABLEAU LES CLES ET VALEUR DU TABLEAU $do QUI EST CREER PLUS HAUT EN FONCTION DE SI IL Y UNE IMAGE OU PAS
     //
    Categories::whereId($id)->update($do);

    $categorie->update([
      'categorie_name' => $request->input('categorie_name'),
    ]);

    return redirect()
      ->route('listing-categories')
      ->with('success', 'Votre categorie à bien été modifiée');
    }

    // SOFT DELETE D UNE CATEGORIE (TOUJOURS EN BASE DE DONNE MAIS PLUS VISIBLE)
    // 
    public function deleteCategories($id){
      $categories = Categories::findOrFail($id);

      $categories->delete();

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre article à bien été supprimée');
    }
}
