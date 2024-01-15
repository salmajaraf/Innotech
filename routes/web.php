<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\SocieteController;
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
    return view('Home');
})->name("homepage");

Route::get('/home', function () {
    return view('Home2');
})->name("homepage2");

Route::get('web', function () {
    return view('Webdev');
})->name("web");

Route::get('app', function () {
    return view('Appdev');
})->name("app");

Route::get('panier', function () {
    return view('Panier');
})->name("panier");

Route::get('securite', [SocieteController::class, 'getSociete'])->name("securite");

Route::get('user', [ContactController::class,'show']);

Route::post('addavis', [ContactController::class,'addavis'])->name('addavis');