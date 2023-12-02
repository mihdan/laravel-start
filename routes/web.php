<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index'])->name('home');

Route::prefix('articles')->group(function () {
    Route::get('/', [ ArticleController::class, 'index'])->name('articles.index');
    Route::get('{id}', [ ArticleController::class, 'show'])->name('articles.show');
});
