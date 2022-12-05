<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/applications', [PagesController::class, 'allAplications'])->name('allAplications');
Route::get('/applications/{id}', [PagesController::class, 'aplicationPage'])->name('aplicationPage');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');