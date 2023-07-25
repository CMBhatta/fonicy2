<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/service',[HomeController::class,'service']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/project',[HomeController::class,'project']);
Route::get('/testimonial',[HomeController::class,'testimonial']);

Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/contact',[HomeController::class,'submit'])->name('submit');
