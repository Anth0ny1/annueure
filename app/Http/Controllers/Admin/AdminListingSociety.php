<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminListingSociety extends Controller
{
    public function listingSociety()
    {
        return view('listing-society');
    }
}
