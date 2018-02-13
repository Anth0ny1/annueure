<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = ['categorie_name'];

    public function society()
    {
        return $this->belongsToMany('App\Society');
    }
}
