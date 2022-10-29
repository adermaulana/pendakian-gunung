<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;
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
    return view('index',[
        'title' => 'Home'
    ]);
});


Route::get('/register', [RegisterController::class,'index']);
Route::get('/login', [LoginController::class,'index']);
Route::get('/portal', [PortalController::class,'index']);
Route::get('/booking', [BookingController::class,'index']);
Route::get('/about', [AboutController::class,'index']);