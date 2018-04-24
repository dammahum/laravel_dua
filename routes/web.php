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

use App\Http\Middleware\CheckAge;

Route::resource('article', 'ArticleController');
//
//Route::get('/', function(){
//   return 'ini facebook' 
//})->middleware->(CheckAge::class);
//
//Route::get('/', function () {
//    return view('welcome');
//});
//
//use Carbon\Carbon;
//
//Route::get('/coba/{id}', 'HomeController@index');
//
//Route::get('/view/{name?}', 'HomeController@view');
//
//Route::get('/db', 'HomeController@db');
//
//Route::get('/test/{name?}/{day?}/{fmt?}', function ($name="Fulan",$day=0,$fmt="Y-m-d H:i:s") {
//    return $name." Pergi tamasya pada hari ".Carbon::now()->addDays($day)->format("$fmt");
//});
//
//
//Route::prefix('santri')->group(function () {
//	Route::get('/', 'HomeController@listSantri');
//	Route::get('create', 'HomeController@create');
//	Route::post('create', 'HomeController@insert');
//    Route::get('edit/{id}', 'HomeController@edit');
//    Route::post('edit', 'HomeController@update');
//	Route::get('hapus/{id}', 'HomeController@hapus');
//});
//
//Route::prefix('user')->group(function () {
//    Route::get('/', 'UserController@listUser');
//    Route::get('create', 'UserController@u_create');
//    Route::post('create', 'UserController@u_insert');
//    Route::get('edit/{id}', 'UserController@u_edit');
//    Route::post('edit', 'UserController@u_update');
//    Route::get('hapus/{id}', 'UserController@u_hapus');
//});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/boots/{link?}', function ($link='index.php') {
//     header('location:/var/www/bootstrap/$link');
// });

//Route::resource('customer', 'CustomerController');