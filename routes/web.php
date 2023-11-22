<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SendMailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class , 'index'])->name('home');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/{name}', [ProjectController::class , 'show'])->name('project');
Route::post('/contact-form-submit', [SendMailController::class , 'submit'])->name('contact-form-submit');