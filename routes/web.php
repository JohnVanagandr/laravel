<?php

use App\Http\Controllers\ProfilleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/home/{id}', [UserController::class, 'edit'])->name('user.edit');

Route::post('/home/{id}', [UserController::class, 'update'])->name('user.update');

Route::resource('profile', ProfilleController::class)
    ->except('index', 'show', 'destroy')
    ->names('profile');
