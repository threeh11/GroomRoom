<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/my_aplications', [PagesController::class, 'myApplications'])->name('myApplications');
Route::get('/all_applications', [PagesController::class, 'allAplications'])->name('allAplications');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

Route::get('/progfile/myPet', [ProfileController::class , 'myPet'])->name('myPet');
Route::get('/progfile/myApplications', [ProfileController::class , 'myApplications'])->name('myApplications');