<?php

use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocieteController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Home');
})->name("homepage");
Route::get('/signin', function () {
    return view('/auth/login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Home2', function () {
    return view('Home2');
})->middleware(['auth', 'verified'])->name('Home2');
Route::get('/web', function () {
    return view('Webdev');
})->middleware(['auth', 'verified'])->name('Webdev');
Route::get('/securite', [SocieteController::class, 'getSociete'])->middleware(['auth', 'verified'])->name('Securite');
Route::get('/app', function () {
    return view('Appdev');
})->middleware(['auth', 'verified'])->name('Appdev');

Route::get('user', [ContactController::class,'show']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::post('addavis', [ContactController::class,'addavis'])->name('addavis');


Route::get('panier', function () {
    return view('Panier');
})->middleware(['auth', 'verified'])->name("panier");


Route::post('addcommande', [CommandeController::class, 'insertcommande'])->name('addcommande');