<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\TeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ViewController::class, 'index']);
Route::get('/forgotpass', [ViewController::class, 'forgotpass']);
Route::get('/signup', [ViewController::class, 'signup']);

// ADMIN
Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'home']);
    Route::get('/newschool', [AdminController::class, 'newschool']);
    Route::get('/newteacher', [AdminController::class, 'newteacher']);
    Route::get('/rejectschool', [AdminController::class, 'rejectschool']);
    Route::get('/rejectteacher', [AdminController::class, 'rejectteacher']);
    Route::get('/viewschool', [AdminController::class, 'viewschool']);
    Route::get('/viewteacher', [AdminController::class, 'viewteacher']);
});


// SCHOOL
Route::prefix('school')->group(function () {
    Route::get('/home', [SchoolController::class,'home']);
    Route::get('/account_settings', [SchoolController::class, 'account_settings']);
    Route::get('/add_template', [SchoolController::class, 'add_template']);
    Route::get('/class_archive', [SchoolController::class, 'class_archive']);
    Route::get('/class', [SchoolController::class,  'class']);
    Route::get('/lessonplan', [SchoolController::class, 'lessonplan']);
    Route::get('/newteacher', [SchoolController::class, 'newteacher']);
    Route::get('/profile', [SchoolController::class, 'profile']);
    Route::get('/rejoin_teacher', [SchoolController::class, 'rejoin_teacher']);
    Route::get('/teacher_archive', [SchoolController::class, 'teacher_archive']);
    Route::get('/view_teacher', [SchoolController::class, 'view_teacher']);
    Route::get('/view_template', [SchoolController::class, 'view_template']);
});


// TEACHER
Route::prefix('teacher')->group(function () {
    Route::get('/home', [TeacherController::class, 'home']);
    Route::get('/account_settings', [TeacherController::class, 'account_settings']);
    Route::get('/class_archive', [TeacherController::class, 'class_archive']);
    Route::get('/class', [TeacherController::class,  'class']);
    Route::get('/lessonplan', [TeacherController::class, 'lessonplan']);
    Route::get('/join_class', [TeacherController::class, 'join_class']);
    Route::get('/profile', [TeacherController::class, 'profile']);
    Route::get('/school_archive', [TeacherController::class, 'school_archive']);
});