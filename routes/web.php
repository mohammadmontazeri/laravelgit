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
    return redirect('/admin/');
});
Route::group(['prefix'=>'admin'],function (){
    Auth::routes();
});

Route::middleware(['auth:web'])->group(function (){
    Route::get('/admin/', function () {
        return view('admin.index');
    });
    // User Module
    Route::resource('/admin/user','Admin\UserController');
    Route::get('/admin/allAdmin',function (){
        return view('admin.user.all_admin');
    })->name('all_admin');
    // Category Module
    Route::resource('/admin/categories','Admin\CategoryController');
    Route::get('/admin/category/add',function(){
       return view('admin.category.addMain');
    })->name('addMainCat');
    // Product Module
    Route::resource('admin/products','Admin\ProductController');
    Route::get('admin/product/moreInfo/{id}','Admin\ProductController@moreInfo');

});
Route::post('ckeditor/image_upload', 'Admin\ProductController@upload')->name('upload');

//////////////                            User Panel Routes

Route::get('/',function (){
   return view('index');
})->name('home');
//
//Route::post('/user/register','UserController@register')->name('user.store');
Route::post('/user/login','Auth\LoginController@authenticate')->name('user.login');
//
Route::get('/register',function(){
    return view('register');
})->name('user_register');

Route::get('/login',function(){
    return view('login');
})->name('user_login');

echo "sfhsadfjg,hsgf";