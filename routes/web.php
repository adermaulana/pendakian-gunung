<?php

use App\Models\Category;
use App\Models\UserBooking;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
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


//login
Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

//dashboard
Route::get('/dashboard',function(){
    return view('/dashboard.index',[
        'title' => 'Dashboard'
    ]);
})->name('login')->middleware('auth');

//CRUD
Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');

//slug
Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');

//Berita
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [PostController::class, 'categories']);

//register
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

//main
Route::get('/portal', [PortalController::class,'index']);
Route::get('/booking', [BookingController::class,'index']);
Route::get('/about', [AboutController::class,'index']);

//CategoryAdmin
Route::resource('/dashboard/categories', AdminCategoryController::class);

