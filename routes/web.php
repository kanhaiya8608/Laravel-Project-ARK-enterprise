<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/settings.php';
