<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/my_pplications', [PagesController::class, 'myApplications'])->name('myApplications');
Route::get('/all_applications', [PagesController::class, 'allAplications'])->name('allAplications');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');
