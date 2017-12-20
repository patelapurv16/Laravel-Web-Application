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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', function(){
    return view('signup');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/studentview', function(){
   return view('studentview');
});

Route::get('/addbooks', function(){
   return view('addbooks');
});

Route::get('/deletebooks', function(){
   return view('deletebooks');
});

Route::get('/librarian', function(){
   return view('librarian');
});


Route::post('register_action','UserController@store');

Route::post('login', 'UserController@login');

//Route::resource('books','BookController');

Route::post('/addbooks', 'BookController@store');
//Route::get('/addbooks', 'ShelfController@store');

Route::post('/deletebooks','BookController@destroy');

Route::get('/viewallshelves','BookController@show');

Route::post('viewallshelves', 'LoanController@store');

Route::get('viewallloans', 'LoanController@show');
