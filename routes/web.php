<?php

use App\Http\Controllers\ContactController;
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

Route::get('web', function () {
    return view('Webdev');
});

Route::get('app', function () {
    return view('Appdev');
});

Route::get('user', [ContactController::class,'show']);

Route::post('addavis', [ContactController::class,'addavis'])->name('addavis');