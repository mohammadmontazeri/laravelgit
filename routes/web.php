<?php

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

Route::get('/edituser', function () {
    return view('user.edit');
})->name('edit');

Auth::routes();
Route::post('/updateuser', 'UserController@update')->name('updateuser');


Route::middleware(['auth:web'])->group(function () {
    Route::get('/index', function () {
        return view('user.index');
    });

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

});
