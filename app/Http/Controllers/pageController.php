<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Admission as ModelsAdmission;
use App\Models\Course;
use App\Models\Payment;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Laravel\Ui\Presets\React;

class pageController extends Controller
{
    public function index1(){
        return view('Admin.index');
    }

    public function add_admission (){
        $courses= Course::latest()->get();
        return view('Admin.Admission.add_admission', compact('courses'));
    }
    public function admission_store(Request $request){
    //    dd($request->all());
        $admission=Admission::latest()->first();
        $request->validate([
            'name' => 'required',
            'm_name' => 'required',
            'l_name' => 'required',
            'roll' => 'required|numeric',
            'registration' => 'required|numeric',
            'course' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'father' => 'required',
            'mother' => 'required',
            'blood' => 'required',
            'country' => 'required',
            'city' => 'required',
            'postal' => 'required',
            'email' => 'required', // Adjust validation rules as needed
            'password' => 'required',
            'role_id' => 'required|',
            'prs_f_name' => 'required|',
            'relationship' => 'required',
            'prs_email' => 'required',
            'prs_phone' => 'required',
            // 'image' => 'required',
        ]);
    
        // // Handle file upload
        // if ($request->hasFile('image')) {
        //     $imagePath = $request->file('image')->store('public/admissions');
        // } else {
        //     // Handle the case where no image was provided or the upload failed
        //     $imagePath=null;
        
        // }
    
        // Create Admission record with the image path
        Admission::create([
            'name' => $request->name,
            'm_name' => $request->name,
            'l_name' => $request->name,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'course' => $request->course,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'father' => $request->father,
            'mother' => $request->mother,
            'blood' => $request->blood,
            'country' => $request->country,
            'phone' => $request->phone,
            'city' => $request->city,
            'postal' => $request->postal,
            'prs_f_name' => $request->prs_f_name,
            'prs_l_name' => $request->prs_l_name,
            'relationship' => $request->relationship,
            'prs_email' => $request->prs_email,
            'prs_phone' => $request->prs_phone,
            'image' =>$request->file('image')->store('public/admissions'),
        ]);
    
        // Create User record
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'role_id' => $request->role_id,
        ]);
    
        return redirect('view_admissions')->with('success', 'Admission uploaded successfully.');
    }
    public function view_admissions(){
        $admissions = Admission::latest()->get();
        return view('Admin.Admission.view_admissions', compact('admissions'));
    }
    public function edit_admission(Admission $admission){
        $courses= Course::latest()->get();
        // dd($student);
        return view('Admin.Admission.edit_admission', compact('admission','courses'));
    }
    public function update_admission(Admission $admission, Request $request){
        if($request->has('image')){
            $image=$request->file('image')->store('public/admission');
            Storage::delete($request->image);
        }else{
            $image = $admission->image;
        }
        $admission->update([
            'name' => $request->name,
            'm_name' => $request->m_name,
            'l_name' => $request->l_name,
            'roll' => $request->roll,
            'registration' => $request->registration,
            'course' => $request->course,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'father' => $request->father,
            'mother' => $request->mother,
            'blood' => $request->blood,
            'country' => $request->country,
            'phone' => $request->phone,
            'city' => $request->city,
            'postal' => $request->postal,
            'prs_f_name' => $request->prs_f_name,
            'prs_l_name' => $request->prs_l_name,
            'relationship' => $request->relationship,
            'prs_email' => $request->prs_email,
            'prs_phone' => $request->prs_phone,
            'image'=>$image,
        ]);
        return redirect('view_admissions');
    }
    public function delete_admission(Admission $admission){
        Storage::delete($admission->image);
        $admission->delete();
        return redirect('view_admissions');
    }
    public function student_profile_view(Admission $admission){
        return view('Admin.Admission.student_profile_view', compact('admission'));
    }
    // public function student_profile_store(Request $request){
    //     Admission::create([
            
    //     ]);
    // }



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
        return back()->with('success', 'Teacher uploaded successfully.');
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
    public function delete_teacher(Teacher $teacher){
        $teacher->delete();
        return redirect('view_teachers');
    }


    public function add_course(){
        return view('Admin.Course.add_course');
    }
    public function course_store(Request $request){
        $request->validate([
            'course_name'=>'required|max:3|min:2',
            'description'=>'required'
        ]);
        Course::create([
            'course_name'=>$request->course_name,
            'description'=>$request->description,
        ]);
        return back()->with('success', 'Course uploaded successfully.');
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


    public function add_payment(Admission $admission){
        return view('Admin.Payment.add_payment',compact('admission'));
    }
    public function payment_store(Admission $admission,Request $request){
   
        Payment::create([
            'admission_id'=>$admission->id,
            'money'=>$request->money,
        ]);
        return redirect('view_payments'); 
    }
    public function view_payments(){
       $payments=Payment::latest()->get();
       return view('Admin.Payment.view_payments', compact('payments'));
    }
    public function edit_payment(Payment $payment){
        return view('Admin.Payment.edit_payment', compact('payment'));
    }
    public function update_payment(Payment $payment, Request $request){
        $payment->update([
            'money'=>$request->money,
        ]);
        return redirect('view_payments');
    }
    public function delete_payment(Payment $payment){
        $payment->delete();
        return redirect('view_payments');
    }

    public function profile(){
        return view('Admin.Profile.profile');
    }    
}
