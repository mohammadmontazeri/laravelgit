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

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth:web'])->group(function () {
    Route::get('/testpanel', function () {
        return view('user.test');
    });
});