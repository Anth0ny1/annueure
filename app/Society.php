<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Society extends Model
{
<<<<<<< HEAD

=======
>>>>>>> 9f1a87de8d337882454067a34e9c6cf60d301e9c
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
