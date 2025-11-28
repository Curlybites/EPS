<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('login');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard', ['title' => 'Dashboard']);
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/menu', function () {
    return view('menu.menuIndex', ['title' => 'Menu']);
})->middleware(['auth', 'verified'])->name('menu');

// Route::get('/user', function () {
//     return view('user.userIndex', ['title' => 'Menu']);
// })->middleware(['auth', 'verified'])->name('user');


Route::resource('user', UserController::class);

require __DIR__ . '/auth.php';
