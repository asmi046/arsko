<?php

use App\Http\Controllers\MipController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactsController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');

    Route::get('/news', [NewsController::class, "index"])->name('news');
    Route::get('/news/{slug}', [NewsController::class, "page"])->name('news.page');

    Route::get('/mips', [MipController::class, "index"])->name('mips');
    Route::get('/mips/{slug}', [MipController::class, "page"])->name('mips.page');
