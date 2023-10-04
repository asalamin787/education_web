<?php

use App\Http\Controllers\admission\admissionController;
use App\Http\Controllers\course\courseController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\payment\paymentController;
use App\Http\Controllers\teacher\teacherController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['role:admin','auth'])->group(function () {

    Route::controller(pageController::class)->group(function() {

        Route::get('/index','index1')->name('index');
        Route::get('profile','profile')->name('profile');
    });

    Route::controller(admissionController::class)->group(function() {

        Route::get('/add_admission', 'create')->name('add_admission');
        Route::post('admission_store', 'store')->name('admission_store');
        Route::get('view_admissions', 'show')->name('view_admissions');
        Route::get('edit_admission/{admission}', 'edit')->name('edit_admission');
        Route::post('update_admission/{admission}', 'update')->name('update_admission');
        Route::get('delete_admission/{admission}', 'destroy')->name('delete_admission');
        Route::get('student_profile_view/{admission}', 'student_profile_view')->name('student_profile_view');
    });
    
    Route::controller(teacherController::class)->group(function() {

        Route::get('add_teacher', 'create')->name('add_teacher');
        Route::post('teacher_store', 'store')->name('teacher_store');
        Route::get('view_teachers', 'show')->name('view_teachers');
        route::get('edit_teacher/{teacher}', 'edit')->name('edit_teacher');
        Route::post('update_teacher/{teacher}', 'update')->name('update_teacher');
        Route::get('delete_teacher/{teacher}', 'destroy')->name('delete_teacher');
        Route::get('teacher_profile_view/{teacher}', 'teacher_profile_view')->name('teacher_profile_view');
    });

    Route::controller(courseController::class)->group(function() {

        Route::get('add_course', 'create')->name('add_course');
        Route::post('course_store','store')->name('course_store');
        Route::get('view_courses', 'show')->name('view_courses');
        Route::get('edit_course/{course}','edit')->name('edit_course');
        Route::post('update_course/{course}', 'update')->name('update_course');
        Route::get('delete_course/{course}', 'destroy')->name('delete_course');
        Route::get('course_students_view/{course}', 'course_students_view')->name('course_students_view');
    });

    Route::controller(paymentController::class)->group(function() {

        Route::get('add_payment/{admission}','create')->name('add_payment');
        Route::post('payment_store/{admission}','store')->name('payment_store');
        Route::get('view_payments','show')->name('view_payments');
        Route::get('edit_payment/{payment}','edit')->name('edit_payment');
        Route::post('update_payment/{payment}','update')->name('update_payment');
        Route::get('delete_payment/{payment}','destroy')->name('delete_payment');
        Route::get('payment_students_view/{admission}','payment_students_view')->name('payment_students_view');
    });
});

Route::middleware(['role:teacher','auth'])->group(function() {
    Route::controller(pageController::class)->group(function() {
        // Route::get('/index','index1')->name('index');
    });
});

Route::middleware(['role:user','auth' ])->group(function() {
    Route::controller(pageController::class)->group(function() {
        // Route::get('/index','index1')->name('index');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
