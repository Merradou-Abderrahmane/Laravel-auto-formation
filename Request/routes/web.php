<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// shortened version of the above
Route::view('/index','get');
Route::view('/post','get');

Route::GET('/return', [UserController::class, 'testRequest']);

Route::POST('/post', [UserController::class, 'testRequest']);
