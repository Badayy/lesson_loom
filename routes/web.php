<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;

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


// SCHOOL
Route::get('/school_home', [ViewController::class, 'school_home']);
Route::get('/school_account_settings', [ViewController::class, 'school_account_settings']);
Route::get('/school_add_template', [ViewController::class, 'school_add_template']);
Route::get('/school_class_archive', [ViewController::class, 'school_class_archive']);
Route::get('/school_lessonplan', [ViewController::class, 'school_lessonplan']);
Route::get('/school_newteacher', [ViewController::class, 'school_newteacher']);
Route::get('/school_profile', [ViewController::class, 'school_profile']);
Route::get('/school_rejoin_teacher', [ViewController::class, 'school_rejoin_teacher']);
Route::get('/school_teacher_archive', [ViewController::class, 'school_teacher_archive']);
Route::get('/school_view_teacher', [ViewController::class, 'school_view_teacher']);
Route::get('/school_view_template', [ViewController::class, 'school_view_template']);

// TEACHER
Route::get('/teacher_home', [ViewController::class, 'teacher_home']);
Route::get('/teacher_account_settings', [ViewController::class, 'teacher_account_settings']);
Route::get('/teacher_class_archive', [ViewController::class, 'teacher_class_archive']);
Route::get('/teacher_lessonplan', [ViewController::class, 'teacher_lessonplan']);
Route::get('/teacher_join_class', [ViewController::class, 'teacher_join_class']);
Route::get('/teacher_profile', [ViewController::class, 'teacher_profile']);
Route::get('/teacher_school_archive', [ViewController::class, 'teacher_school_archive']);


Route::prefix('admin')->group(function () {
    Route::get('/home', [AdminController::class, 'home']);
    Route::get('/newschool', [AdminController::class, 'newschool']);
    Route::get('/newteacher', [AdminController::class, 'newteacher']);
    Route::get('/rejectschool', [AdminController::class, 'rejectschool']);
    Route::get('/rejectteacher', [AdminController::class, 'rejectteacher']);
    Route::get('/viewschool', action: [AdminController::class, 'viewschool']);
    Route::get('/viewteacher', [AdminController::class, 'viewteacher']);
});

