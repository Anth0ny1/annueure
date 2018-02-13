<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Categories;
use App\Http\Requests\NewCategoriesRequest;
// use App\Categories;

class AdminCategoriesController extends Controller
{
    //
    public function newCategories(){

      return view('admin/listing-categories');
    }

    public function newCategoriesAction(NewCategoriesRequest $request){
      // Categories::create($request->all());

      $post = $request->all();
      // dd($post);
      // echo $post['title'];
      \DB::table('categories')->insert([
        'categorie_name' => $post['name'],
        'created_at' => Carbon::now(),
      ]);

      return redirect()
        ->route('admin/listing-categories')
        ->with('success', 'Votre categorie à bien était ajouté');
    }

    public function updateCategories(){

    }

    public function deleteCategories($id){
      $categories = Categories::findOrFail($id);

      $categories->delete();

      return redirect()
        ->route('listing-categories')
        ->with('success', 'Votre article à bien était SUPPRIMER');
    }
}
