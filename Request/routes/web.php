<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fruitsController;

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

Route::get('index', [fruitsController::class, 'showFruits']);

Route::get("fruit/{id}",[fruitsController::class,"getFruit"]);

Route::get("/select",[fruitsController::class,"select"]);

Route::get("/join",[fruitsController::class,"join"]);