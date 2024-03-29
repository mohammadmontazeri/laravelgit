<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /*public function query()
    {
        if (isset($_GET)){
            $q = $_GET;
            return $q;
        }else{
            return "";
        }
    }
    protected function redirectTo(){
        if (empty($this->query())){
            Auth::logout();
            return '/admin/';
        }else{
            Auth::logout();
            return '/';
        }

    }*/
    protected function redirectTo(){
            Auth::logout();
            return '/admin/';

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function imageuploader($file){
        $filename=time()."_".$file->getClientOriginalName();
        $path=public_path('/uploads/');
        $file->move($path,$filename);
        return "/uploads/".$filename;
    }

    public function create(array $data)
    {
        if (isset($data['img'])){
            $file = $data['img'];
            $pic = $this->imageuploader($file);
        }else{
            $pic = "در حال حاضر عکس ندارد";
        }

        $user = new User([
        'name' => $data['name'],
        'email' => $data['email'],
        'img' => $pic,
        'password' => Hash::make($data['password']),
    ]);
        $user->save();
        return $user;
    }
}
