<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactsController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
    Route::get('/news', [NewsController::class, "index"])->name('news');
    Route::get('/news/{slug}', [NewsController::class, "page"])->name('news.page');
