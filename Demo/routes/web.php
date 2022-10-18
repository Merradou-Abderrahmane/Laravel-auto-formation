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

Route::get('/', function () {
    return view('welcome');
});
// 
Route::get('/demo1', function () {
    return view('demo1');
});

// shorter ways

Route::view('/demo2', 'demo2');

Route::redirect('/', '/demo2');
// require parameters
// capture parameters in route , id for example

Route::get('/user/{id}', function ($id) {
    return 'user '.$id;
});

// optional parameters
// Make sure to give the route's corresponding variable a 
// default value: in this case $name = 'merradou'
Route::get('/user/{name?}', function ($name = "merradou") {
    return $name;
});

// Regular Expression Constraints

Route::get('/user/{id}', function ($id) {
    //
})->where('id', '[0-9]+');

Route::get('/category/{category}', function ($category) {
    //
})->whereIn('category', ['movie', 'song', 'painting']);








