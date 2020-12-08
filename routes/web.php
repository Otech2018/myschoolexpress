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

Route::get('/', [App\Http\Controllers\FrontPagesController::class, 'index'])->name('homepage');
Route::get('/about_us', [App\Http\Controllers\FrontPagesController::class, 'about_us'])->name('about_us');
Route::get('/contact_us', [App\Http\Controllers\FrontPagesController::class, 'contact_us'])->name('contact_us');
	

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
