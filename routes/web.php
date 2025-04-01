<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

Route::get('/', [PromotionController::class, 'index'])->name('home');
Route::resource('promotions', PromotionController::class);