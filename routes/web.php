<?php

use App\Models\Category;
use App\Models\UserBooking;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListBookingController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\TambahKreatorController;
use App\Http\Controllers\AdminDataBookingController;
use App\Http\Controllers\AdminDataPendakiController;

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
        'title' => 'Home',
        'categories' => Category::all()
    ]);
});


//login
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

//dashboard
Route::get('/dashboard',function(){
    return view('/dashboard.index',[
        'title' => 'Main Page'
    ]);
})->middleware('auth');

//CRUD
Route::resource('/dashboard/posts',DashboardPostController::class)->middleware('auth');

//slug
// Route::get('/dashboard/posts/checkSlug',[DashboardPostController::class,'checkSlug'])->middleware('auth');

//Berita
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [PostController::class, 'categories']);

//register
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'store']);

//Booking
Route::get('/booking', [BookingController::class,'index']);
Route::get('/booking/daftar', [BookingController::class,'daftar']);
Route::get('/booking/lembanna', [BookingController::class,'lembanna']);
Route::post('/booking/lembanna', [BookingController::class,'store']);
Route::get('/booking/tasosso', [BookingController::class,'tasosso']);
Route::post('/booking/tasosso', [BookingController::class,'store']);
Route::get('/booking/konfirmasi-pembayaran', [BookingController::class,'konfirmasi'])->middleware('auth:userbooking');


//listbooking
Route::get('/list-booking', [ListBookingController::class,'index'])->middleware('auth:userbooking');
Route::get('/my-account', [ListBookingController::class,'myAccount'])->middleware('auth:userbooking');
Route::get('/list-booking/detail/{id}', [ListBookingController::class,'detail'])->middleware('auth:userbooking');
Route::post('/logout-user', [ListBookingController::class,'keluar'])->middleware('auth:userbooking');

//about
Route::get('/about', [AboutController::class,'index']);

//datapendaki
Route::resource('/dashboard/datapendaki',AdminDataPendakiController::class)->middleware('admin');

//databooking
Route::resource('/dashboard/booking',AdminDataBookingController::class)->middleware('admin');

//tambahkategori
Route::resource('/dashboard/categories',AdminCategoryController::class)->middleware('admin');

//tambahkreator
Route::resource('/dashboard/kreator',TambahKreatorController::class)->middleware('admin');
