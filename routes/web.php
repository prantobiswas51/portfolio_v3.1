<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dev');
})->name('dev');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/posts', [PageController::class, 'posts'])->name('posts');
Route::get('/post/{slug}', [PageController::class, 'single_post'])->name('single_post');

Route::get('/works', [PageController::class, 'works'])->name('works');
Route::get('/skills', [PageController::class, 'skills'])->name('skills');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
