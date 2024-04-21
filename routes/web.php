<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ConferenceController::class, 'index'])->name('conferences.index');

Route::get('login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');
Route::post('/conferences/store', [ConferenceController::class, 'store'])->name('conferences.store');
Route::get('/conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::put('/conferences/{conference}/update', [ConferenceController::class, 'update'])->name('conferences.update');
Route::delete('/conferences/{conference}/delete', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
