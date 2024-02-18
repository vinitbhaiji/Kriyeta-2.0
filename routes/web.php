<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ModelController;


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

Route::get("/", [IndexController::class, "index"]);
Route::get("/categories", [IndexController::class, "categories"]);
Route::get("/about", [IndexController::class, "about"]);
Route::get("/contact", [IndexController::class, "contact"]);
Route::post("/contact", [ContactController::class, "submit"]);
Route::get("/login", [IndexController::class, "login"]);
Route::get("/signup", [IndexController::class, "signup"]);
Route::post("/signup", [SignupController::class, "submit"]);
Route::get("/test", [IndexController::class, "test"]);
Route::post('/test', [ModelController::class, "processForm"])->name('process.form');




// Route::controller(LoginRegisterController::class)->group(function () {
//     Route::get('/register', 'register')->name('register');
//     Route::post('/register', 'register')->name('registerdone');
//     Route::post('/store', 'store')->name('store');
//     Route::get('/login', 'login')->name('login');
//     Route::post('/login', 'login')->name('logindone');
//     Route::post('/authenticate', 'authenticate')->name('authenticate');
//     Route::get('/dashboard', 'dashboard')->name('dashboard');
//     Route::post('/logout', 'logout')->name('logout');
// });
// Route::get("/register", [RegisterController::class, "create"]);
// Route::get('/home', [HomeController::class, 'index'])->name('home');