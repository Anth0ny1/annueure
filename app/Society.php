<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{

    protected $table = 'society';
    // protected $timestamp = false;
    protected $fillable = [
        'name_society','gerant', 'adress', 'city', 'phone','skills', 'site_web', 'email', 'siren'
    ];
    public function categories()
    {
        return $this->belongsToMany('App\Categories');
    }
}
