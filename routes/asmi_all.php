<?php

use App\Http\Controllers\ContactsController;
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\IndexController;

    Route::get('/', [IndexController::class, "index"])->name('home');
    Route::get('/contacts', [ContactsController::class, "index"])->name('contacts');
