<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Categories;
use App\Services\PathUpload;

use App\Http\Requests\NewCategoriesRequest;
// use App\Categories;

class AdminCategoriesController extends Controller
{
    //
    public function newCategories(){

      return view('admin/new-categories');
    }

    public function newCategoriesAction(NewCategoriesRequest $request){
      // Categories::create($request->all());
      //
       $post = $request->all();

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


      } else {
        $do = [
          'categorie_name' => $post['categorie_name'],
          'created_at'     => Carbon::now(),
        ];
      }

      Categories::insert($do);

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre categorie à bien était ajouté');
    }

    public function updateCategories($id){
      $categorie = Categories::findOrFail($id);

      return view('admin/update-categories', compact('categorie'));
    }

    public function updateCategoriesAction($id, NewCategoriesRequest $request){

      $categorie = Categories::findOrFail($id);


     // Categories::whereId($id)->update($do);


     // Categories::insert($do);
      $categorie->update([
        'categorie_name' => $request->input('categorie_name'),
      ]);


          // $article->update($request->all());  // Methode fonctionnel mais pas dans tous les cas

    return redirect()
      ->route('listing-categories')
      ->with('success', 'Votre categorie à bien était MODIFIE');
    }

    public function deleteCategories($id){
      $categories = Categories::findOrFail($id);

      $categories->delete();

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre article à bien était SUPPRIMER');
    }
}
