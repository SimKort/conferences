<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConferenceController::class, 'index'])->name('conferences.index');
