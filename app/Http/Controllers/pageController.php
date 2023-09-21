<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Admission as ModelsAdmission;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class pageController extends Controller
{
    public function index1(){
        return view('Admin.index');
    }

    public function add_admission (){
        return view('Admin.Admission.add_admission');
    }
    public function admission_store(Request $request){
    //    dd($request->all());
        Admission::create([
            'name' => $request->name,
            'm_name' => $request->m_name,
            'l_name' => $request->l_name,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'course' => $request->course,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'student_id' => $request->student_id,
            'father' => $request->father,
            'mother' => $request->mother,
            'blood' => $request->blood,
            'country' => $request->country,
            'which_country' => $request->which_country,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
            // 'password_confirmation' => $request->password_confirmation,
            'street' => $request->street,
            'street_2' => $request->street_2,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
            'prs_f_name' => $request->prs_f_name,
            'prs_l_name' => $request->prs_l_name,
            'relationship' => $request->relationship,
            'prs_email' => $request->prs_email,
            'prs_phone' => $request->prs_phone,
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            // 'password_confirmation' => $request->password_confirmation,
            'role_id' => $request->role_id,
        ]);
        return back();
    }
    public function view_admissions(){
        $admissions = Admission::latest()->get();
        return view('Admin.Admission.view_admissions', compact('admissions'));
    }
    public function edit_admission(Admission $admission){
        // dd($student);
        return view('Admin.Admission.edit_admission', compact('admission'));
    }
    public function update_admission(Admission $admission, Request $request){
        
        $admission->update([
            'name' => $request->name,
            'm_name' => $request->m_name,
            'l_name' => $request->l_name,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'course' => $request->course,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'student_id' => $request->student_id,
            'father' => $request->father,
            'mother' => $request->mother,
            'blood' => $request->blood,
            'country' => $request->country,
            'which_country' => $request->which_country,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
            'street' => $request->street,
            'street_2' => $request->street_2,
            'city' => $request->city,
            'state' => $request->state,
            'postal' => $request->postal,
            'prs_f_name' => $request->prs_f_name,
            'prs_l_name' => $request->prs_l_name,
            'relationship' => $request->relationship,
            'prs_email' => $request->prs_email,
            'prs_phone' => $request->prs_phone,
        ]);
        return redirect('view_admissions');
    }
    public function delete_admission(Admission $admission){
        $admission->delete();
        return redirect('view_admissions');
    }



    public function add_teacher(){
        $courses= Course::latest()->get();
        return view('Admin.Teacher.add_teacher', compact('courses'));
    }
    public function teacher_store(Request $request){
        // dd($request->all());
        Teacher::create([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'school_name' => $request->school_name,
            'job_title' => $request->job_title,
            'street' => $request->street,
            'street_2' => $request->street_2,
            'city' => $request->city,
            'region' => $request->region,
            'postal' => $request->postal,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'course_name' => $request->course_name,
            'course_date' => $request->course_date,
        ]);
        return back();
    }
    public function view_teachers(){
        $teachers= Teacher::latest()->get();
        return view('Admin.Teacher.view_teachers', compact('teachers'));
    }
    public function edit_teacher(Teacher $teacher){
        $courses= Course::latest()->get();
        return view('Admin.Teacher.edit_teacher', compact('teacher','courses'));
    }
    public function update_teacher(Teacher $teacher, Request $request){
        $teacher->update([
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'school_name' => $request->school_name,
            'job_title' => $request->job_title,
            'street' => $request->street,
            'street_2' => $request->street_2,
            'city' => $request->city,
            'region' => $request->region,
            'postal' => $request->postal,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'course_name' => $request->course_name,
            'course_date' => $request->course_date,
        ]);
        return redirect('view_teachers');
        
    }


    public function add_course(){
        return view('Admin.Course.add_course');
    }
    public function course_store(Request $request){
        Course::create([
            'course_name'=>$request->course_name,
            'description'=>$request->description,
        ]);
        return back();
    }
    public function view_courses(){
        $courses = Course::latest()->get();
        return view('Admin.Course.view_courses', compact('courses'));
    }
    public function edit_course(Course $course){
        return view('Admin.Course.edit_course', compact('course'));
    }
    public function update_course(Course $course, Request $request){
        $course->update([
            'course_name'=>$request->course_name,
            'description'=>$request->description,
        ]);
        return redirect('view_courses');
    }
    public function delete_course(Course $course){
        $course->delete();
        return redirect('view_courses');
    }
}
