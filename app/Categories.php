<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';

    public function society()
    {
        return $this->belongsToMany('App\Society');
    }
}
