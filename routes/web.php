<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dev');
})->name('dev');

Route::get('/skills', function () {
    return view('skills');
})->name('skills');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/posts', function () {
    return view('posts');
})->name('posts');

Route::get('/works', function () {
    return view('works');
})->name('works');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
