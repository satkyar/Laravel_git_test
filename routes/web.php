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

Route::resource('receipe','ReceipeController');
Route::resource('category','CategoryController');
// Route::resource('/','ReceipeController');
Route::resource('detail','PublicController');
// Route::get('/detail/{receipe}','PublicController@show');


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
