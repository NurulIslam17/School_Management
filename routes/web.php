<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/all-courses',[HomeController::class,'allCourse'])->name('courses');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact');
Route::get('/font-login',[HomeController::class,'fontLogin'])->name('font-login');
Route::get('/font-register',[HomeController::class,'fontRegister'])->name('font-register');
Route::get('/course-details',[HomeController::class,'courseDetails'])->name('course-details');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});
