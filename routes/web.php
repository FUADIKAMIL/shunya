<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Route::get('/', [PageController::class, 'login'])->name('login');
// Route::post('/login', function (Illuminate\Http\Request $request) {
//     $username = $request->input('username');
//     return redirect()->route('dashboard', ['username' => $username]);
// });
Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/shunya', [PageController::class, 'shunya'])->name('shunya');
Route::get('/ticket', [PageController::class, 'ticket'])->name('ticket');
Route::get('/pengelolaan', [PageController::class, 'pengelolaan'])->name('pengelolaan');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::get('/logout', [PageController::class, 'logout'])->name('logout');
