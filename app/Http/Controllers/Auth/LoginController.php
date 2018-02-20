<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**    // public function __construct()
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //1599
      // dd($request->user());
      // if ($request->user()->status == 'inactif') {
      //   dd('tu es banni');
      // }
      // $this->middleware('user');
        //
      $this->middleware('guest')->except('logout');
    }
}
