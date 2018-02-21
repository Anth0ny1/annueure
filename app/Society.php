<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Society extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table = 'society';
    // protected $timestamp = false;
    protected $fillable = [
        'name_society',
        'gerant',
        'adress',
        'city',
        'phone',
        'skills',
        'site_web',
        'email',
        'siren',
        'path',
        'original_name',
        'image_name',
        'moderation'
    ];
    public function categories()
    {
        return $this->belongsToMany('\App\Categories', 'categories_society');
    }


}
