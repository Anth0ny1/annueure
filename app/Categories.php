<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'categories';
    protected $fillable = ['categorie_name'];

    public function society()
    {
        return $this->belongsToMany('\App\Society', 'categories_society');
    }
}
