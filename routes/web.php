<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home',[WebsiteController::class, 'index'])->name('home');
Route::get('/signin',[WebsiteController::class, 'signin'])->name('signin');
Route::get('/signup',[WebsiteController::class, 'signup'])->name('signup');
Route::get('/forgotpass',[WebsiteController::class, 'forgotpass'])->name('forgotpass');
Route::get('/product',[WebsiteController::class, 'product'])->name('product');
Route::get('/term-condition',[WebsiteController::class, 'termcondition'])->name('termcondition');
Route::get('/privacypolicy',[WebsiteController::class, 'privacypolicy'])->name('privacypolicy');

Route::post('/register', [LoginController::class, 'register']);