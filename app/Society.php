<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{

    protected $table = 'society';
    protected $fillable = [
        'name_society', 'adress', 'city', 'phone', 'site_web', 'email', 'siren'
    ];
    public function categories()
    {
        return $this->belongsToMany('App\Categories');
    }
}
