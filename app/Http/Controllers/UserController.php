<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\AdminController;
use App\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Sodium\compare;

class UserController extends AdminController
{

    public function register(Request $request)
    {
       /* $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);*/
       $file = $request['image'];
       $img = $this->imageuploader($file);
       User::create([
            'name' =>$request['name'],
            'email' =>$request['email'],
            'password'=>sha1($request['password']),
            'img' =>$img,

        ]);
        $query = $request['name'];
        return redirect(route('user_register',['query'=>$query]));
    }

    public function login(Request $request){
        $user = User::where('email','=',$request['email'])->get();
        $pass = $user[0]['password'];
        if (isset($user)){
            if ($pass == sha1($request['password'])){
                return "OK";
            }else{
                return "NOT OK";
            }
        }else{
            return "NOT FOUND";
        }
    }

}
