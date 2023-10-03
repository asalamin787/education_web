<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Admission as ModelsAdmission;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;

class pageController extends Controller
{
    public function index1(){
        $admissions=Admission::latest()->limit(5)->get();
        $teacher=Teacher::latest()->get();
        $course=Course::latest()->get();
        $payments=Payment::latest()->get();
        return view('Admin.index', compact('admissions', 'teacher', 'course', 'payments'));
    }
  
    public function profile(){
        return view('Admin.Profile.profile');
    }    
}
