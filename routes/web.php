<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['role:admin','auth'])->group(function () {

    Route::get('/index',[pageController::class, 'index1']);
    
    Route::get('/add_admission', [pageController::class, 'add_admission'])->name('add_admission');
    Route::post('admission_store',[pageController::class, 'admission_store'])->name('admission_store');

    Route::get('view_admissions', [pageController::class, 'view_admissions'])->name('view_admissions');

    Route::get('edit_admission/{admission}', [pageController::class, 'edit_admission'])->name('edit_admission');
    Route::post('update_admission/{admission}', [pageController::class, 'update_admission'])->name('update_admission');
    Route::get('delete_admission/{admission}', [pageController::class, 'delete_admission'])->name('delete_admission');


    Route::get('add_teacher', [pageController::class, 'add_teacher'])->name('add_teacher');
    Route::post('teacher_store', [pageController::class, 'teacher_store'])->name('teacher_store');

    Route::get('view_teachers', [pageController::class, 'view_teachers'])->name('view_teachers');

    route::get('edit_teacher/{teacher}', [pageController::class, 'edit_teacher'])->name('edit_teacher');
    Route::post('update_teacher/{teacher}', [pageController::class, 'update_teacher'])->name('update_teacher');


    Route::get('add_course', [pageController::class, 'add_course'])->name('add_course');
    Route::post('course_store', [pageController::class,'course_store'])->name('course_store');

    Route::get('view_courses', [pageController::class, 'view_courses'])->name('view_courses');

    Route::get('edit_course/{course}',[pageController::class,'edit_course'])->name('edit_course');
    Route::post('update_course/{course}', [pageController::class, 'update_course'])->name('update_course');
    Route::get('delete_course/{course}', [pageController::class, 'delete_course'])->name('delete_course');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
