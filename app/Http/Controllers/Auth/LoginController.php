<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
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

                    if (Gate::allows('loginPanel')) {
                        return '/admin/';
                    } else {
                        Auth::logout();
                    }
         }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
       /* $users = User::where(['email'=> $request['email']])->get();
        if (isset($users)){
            return redirect()->back();
        }*/
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('home')->with('msg','به وب اینجا خوش آمدید');
        }else{
            return redirect()->back()->with('msg','کاربر مورد نظر یافت نشد');
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
