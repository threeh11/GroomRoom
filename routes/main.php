<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/applications', [PagesController::class, 'allAplications'])->name('allAplications');
Route::get('/applications/{id}', [PagesController::class, 'aplicationPage'])->name('aplicationPage')->where('id', '[0-9]+');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');