<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';
    // protected $hidden = ['_token'];
    protected $fillable = [
      'categorie_name',
      'path',
      'original_name',
      'image_name'
    ];

    public function society()
    {
        return $this->belongsToMany('\App\Society', 'categories_society');
    }
}
