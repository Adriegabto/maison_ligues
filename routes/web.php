<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('index');
})->name('home');


// Routes de login
Route::get('/login', [ClientController::class, 'showLoginForm'])->name('login');
Route::post('/login', [ClientController::class, 'login'])->name('login.post');

// Routes de registre
Route::get('/register', [ClientController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [ClientController::class, 'register'])->name('register.post');

// Route de succès
Route::get('/success', [ClientController::class, 'showSuccess'])->name('success')->middleware('.auth');


//evvent
Route::middleware(['auth'])->group(function () {
    Route::resource('events', EventController::class);
});

// Routes supplémentaires
Route::get('/form', [PageController::class, 'form']);
Route::post('/submit-form', [PageController::class, 'submitForm']);
Route::get('/update', [PageController::class, 'update']);
Route::get('/valid', [PageController::class, 'valid']);
Route::get('/clientsList', [PageController::class, 'clientsList']);
Route::get('/events', [PageController::class, 'events']);