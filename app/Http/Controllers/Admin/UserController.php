<?php

namespace App\Http\Controllers\Admin;
use Hekmatinasser\Verta\Verta;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class UserController extends AdminController
{

    public function index()
    {
        if (Auth::user()->super_admin == 0){
            $users = User::where('super_admin','=',0)->get();
        }else{
            $users=User::get();
        }
        return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,User $user)
    {
       //$this->authorize('update',Auth::user()->id)*/
        $data=$request->all();
        if (!isset($data['img'])){
            $pic = $user->img;
        }else{
            $pic = $this->imageuploader($data['img']);
        }
        if (isset($data['password'])){
            $pass = Hash::make($data['password']);
        }else{
            $pass = $user->password;
        }
       $user->update([
            'name' => $data['name'],
            'role' => $data['role'],
            'status' => $data['status'],
            'password' => $pass,
            'img' =>$pic,
        ]);
        return redirect('/admin/user');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('user.index'));
    }
}
