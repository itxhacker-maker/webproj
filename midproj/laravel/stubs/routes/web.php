<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes (stubs)
|--------------------------------------------------------------------------
|
| These routes point to the PageController stubbed in the app.
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/courses', [PageController::class, 'courses'])->name('courses');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
