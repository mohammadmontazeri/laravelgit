<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function update(Request $request){

       $data=$request->all();
       Auth()->user()->update($data);
       return redirect(route('edit'));

    }
}