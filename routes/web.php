<?php
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/panel_logout',function (){
    \Illuminate\Support\Facades\Auth::logout();
    return redirect('/admin/home');
});
Auth::routes();

Route::middleware(['auth:web'])->group(function (){
    Route::get('/admin/home', function () {
        return view('index');
    });
    // User Module
    Route::resource('/admin/user','Admin\UserController');
    Route::get('/admin/allAdmin',function (){
        return view('admin.user.all_admin');
    })->name('all_admin');
    // Category Module
    Route::resource('/admin/categories','Admin\CategoryController');


});
