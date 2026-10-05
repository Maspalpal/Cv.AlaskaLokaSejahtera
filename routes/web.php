<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Route untuk Landing Page Company Profile CV. Alaska Loka Sejahtera
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('home');
