<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'categories';
    // protected $hidden = ['_token'];
    protected $fillable = [
      'categorie_name',
      'path',
      'original_name',
      'image_name',
      'description'
    ];

    public function society()
    {
        return $this->belongsToMany('\App\Society', 'categories_society');
    }
}
