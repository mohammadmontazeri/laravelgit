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
    return redirect('/index');
});
Auth::routes();

Route::middleware(['auth:web'])->group(function () {
    Route::get('/index', function () {
        return view('index');
    });
//Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});
Route::resource('/admin_panel/user','Admin\UserController');
Route::get('/all_admin',function (){
    return view('admin.user.all_admin');
})->name('all_admin');
