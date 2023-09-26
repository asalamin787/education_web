<?php

use App\Http\Controllers\pageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['role:admin','auth'])->group(function () {

    Route::get('/index',[pageController::class, 'index1'])->name('index');
    
    Route::get('/add_admission', [pageController::class, 'add_admission'])->name('add_admission');
    Route::post('admission_store',[pageController::class, 'admission_store'])->name('admission_store');
    Route::get('view_admissions', [pageController::class, 'view_admissions'])->name('view_admissions');
    Route::get('edit_admission/{admission}', [pageController::class, 'edit_admission'])->name('edit_admission');
    Route::post('update_admission/{admission}', [pageController::class, 'update_admission'])->name('update_admission');
    Route::get('delete_admission/{admission}', [pageController::class, 'delete_admission'])->name('delete_admission');
    Route::get('student_profile_view/{admission}', [pageController::class, 'student_profile_view'])->name('student_profile_view');


    Route::get('add_teacher', [pageController::class, 'add_teacher'])->name('add_teacher');
    Route::post('teacher_store', [pageController::class, 'teacher_store'])->name('teacher_store');
    Route::get('view_teachers', [pageController::class, 'view_teachers'])->name('view_teachers');
    route::get('edit_teacher/{teacher}', [pageController::class, 'edit_teacher'])->name('edit_teacher');
    Route::post('update_teacher/{teacher}', [pageController::class, 'update_teacher'])->name('update_teacher');
    Route::get('delete_teacher/{teacher}', [pageController::class, 'delete_teacher'])->name('delete_teacher');

    Route::get('add_course', [pageController::class, 'add_course'])->name('add_course');
    Route::post('course_store', [pageController::class,'course_store'])->name('course_store');
    Route::get('view_courses', [pageController::class, 'view_courses'])->name('view_courses');
    Route::get('edit_course/{course}',[pageController::class,'edit_course'])->name('edit_course');
    Route::post('update_course/{course}', [pageController::class, 'update_course'])->name('update_course');
    Route::get('delete_course/{course}', [pageController::class, 'delete_course'])->name('delete_course');

    Route::get('add_payment/{admission}', [pageController::class, 'add_payment'])->name('add_payment');
    Route::post('payment_store/{admission}', [pageController::class, 'payment_store'])->name('payment_store');
    Route::get('view_payments', [pageController::class, 'view_payments'])->name('view_payments');
    Route::get('edit_payment/{payment}', [pageController::class, 'edit_payment'])->name('edit_payment');
    Route::post('update_payment/{payment}', [pageController::class, 'update_payment'])->name('update_payment');
    Route::get('delete_payment/{payment}', [pageController::class, 'delete_payment'])->name('delete_payment');

    Route::get('profile', [pageController::class, 'profile'])->name('profile');
});

Route::middleware(['role:user','auth' ])->group(function(){
    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
