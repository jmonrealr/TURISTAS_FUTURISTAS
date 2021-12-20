<?php

use App\Http\Controllers\EstadoController;
use App\Http\Controllers\ProfileController;
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

//Default routes
Route::get('/', ['middleware' => 'guest' ,function () {
    return view('auth.login');
}])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Authenticated routes
Route::middleware(['auth'])->group( function () {
    Route::resource('profile', ProfileController::class);
    Route::resource('estados', EstadoController::class);
    Route::resource('questions', \App\Http\Controllers\QuestionController::class);
});
