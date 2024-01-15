<?php

<<<<<<< HEAD
use App\Http\Controllers\ProfileController;
=======
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SocieteController;
>>>>>>> a9a5f47ef806ae522275a35eb05667ef4c929ac5
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
<<<<<<< HEAD
});
Route::get('/signin', function () {
    return view('/auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
=======
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
>>>>>>> a9a5f47ef806ae522275a35eb05667ef4c929ac5

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';
=======
Route::post('addavis', [ContactController::class,'addavis'])->name('addavis');
>>>>>>> a9a5f47ef806ae522275a35eb05667ef4c929ac5
