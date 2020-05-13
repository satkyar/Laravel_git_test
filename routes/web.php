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

Route::get('/','ReceipeController@index');

Route::get('/php','Homecontroller@phppage');

Route::get('/js','Homecontroller@jspage');

// Route::get('/', function () {
//     return view('home',[
//     	"name" => "Home Page Template"
//     ]);
// });

// Route::get('/php', function () {
//     return view('php',[
//     	'data' => array(
//     		'lesson1' => "lesson1 data",
//     		'lesson2' => "lesson2 data",
//     		'lesson3' => "lesson3 data"
//     	)
//     ]);
// });

// Route::get('/js', function () {
//     return view('js');
// });