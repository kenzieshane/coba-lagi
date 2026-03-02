<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/my-books', [BookController::class, 'myBooks'])->middleware('auth')->name('my.books');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/books', [BookController::class, 'index']
);

Route::get('/{id}', [BookController::class, 'show']
);

Route::post('/cart/add/{id}', [BookController::class, 'addToCart'])->middleware('auth')->name('cart.add');

Route::delete('/cart/remove/{id}', [BookController::class, 'removeFromCart'])->middleware('auth')->name('cart.remove');
