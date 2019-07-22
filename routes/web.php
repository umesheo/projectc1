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

/*Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/about/{name?}', function ($name=null) {
    echo $name;
});

Route::Group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        echo "I am admin";
    });
    Route::get('add', function () {
        echo "add users";
    });
    Route::get('delete/{id}', function ($id) {
        echo "record is deleted successfully!";
    });
});*/
Route::any('/','ApplicationController@index');
Route::any('/home','ApplicationController@home');
Route::any('/about','ApplicationController@about');