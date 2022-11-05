<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TeacherAuthController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminCourseController;


Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/all-courses',[HomeController::class,'allCourse'])->name('courses');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact');
Route::get('/font-login',[HomeController::class,'fontLogin'])->name('font-login');
Route::get('/font-register',[HomeController::class,'fontRegister'])->name('font-register');
Route::get('/details/{id}',[HomeController::class,'courseDetails'])->name('course-details');


Route::get('/teacher/login',[TeacherAuthController::class,'loginForm'])->name('teacher.login');
Route::post('/teacher/login/check',[TeacherAuthController::class,'teacherLoginCheck'])->name('teacher.login.check');
Route::post('/teacher/logout',[TeacherAuthController::class,'teacherLogout'])->name('teacher.logout');


Route::get('/teacher/dashboard',[TeacherDashboardController::class,'index'])->name('teacher.dashboard');
Route::get('/teacher/add-course',[TeacherDashboardController::class,'addCourse'])->name('add.course');
Route::get('/teacher/manage-course',[TeacherDashboardController::class,'manageCourse'])->name('manage.course');
Route::post('/teacher/create-course',[CourseController::class,'createCourse'])->name('create.course');

Route::get('/teacher/delete-course/{id}',[CourseController::class,'deleteCourse'])->name('delete.course');
Route::get('/teacher/edit-course/{id}',[CourseController::class,'editCourse'])->name('edit.course');
Route::post('/teacher/update-course',[CourseController::class,'updateCourse'])->name('update.course');
Route::get('/teacher/details-course/{id}',[CourseController::class,'detailsCourse'])->name('details.course');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

    Route::get('/add-teacher',[TeacherController::class,'index'])->name('add.teacher');
    Route::get('/manage-teacher',[TeacherController::class,'manage'])->name('manage.teacher');

    Route::post('/create-teacher',[TeacherController::class,'createTeacher'])->name('create.teacher');
    Route::get('/edit-teacher/{id}',[TeacherController::class,'editTeacher'])->name('edit.teacher');
    Route::post('/update-teacher',[TeacherController::class,'updateTeacher'])->name('update.teacher');
    Route::get('/delete-teacher/{id}',[TeacherController::class,'deleteTeacher'])->name('delete.teacher');
    Route::get('/change-status/{id}',[TeacherController::class,'changeStatus'])->name('change.status');

    Route::get('/admin-manage-course',[AdminCourseController::class,'adminManageCourse'])->name('admin.manage.course');
    Route::get('/change-course-status/{id}',[AdminCourseController::class,'changeCourseStatus'])->name('change.course.status');
});
