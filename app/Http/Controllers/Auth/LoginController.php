<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


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




         protected function redirectTo (){
           /* if (Auth::user()->can('loginPanel')){
                return '/index';
            }
            else{
                Auth::logout();
            }
           policy
           */
           if (Gate::allows('loginPanel')){
               return '/admin/home';
           }
           else{
               Auth::logout();
           }
         }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
