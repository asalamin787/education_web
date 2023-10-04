<?php

namespace App\Http\Controllers\teacher;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses= Course::latest()->get();
        return view('Admin.Teacher.add_teacher', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required',
            'l_name' => 'required',
            'job_designation' => 'required',
            'city' => 'required',
            'region' => 'required',
            'course_id' => 'required',
            'phone' => 'required',
            'country' => 'required',
            'postal' => 'required',
            'email' => 'required', // Adjust validation rules as needed
            'birthday' => 'required',
            'password' => 'required',
            'role_id' => 'required|',
            // 'image' => 'required',
        ]);
        Teacher::create([
            'name' => $request->name,
            'l_name' => $request->l_name,
            'job_designation' => $request->job_designation,
            'city' => $request->city,
            'region' => $request->region,
            'postal' => $request->postal,
            'country' => $request->country,
            'phone' => $request->phone,
            'email' => $request->email,
            'course_id' => $request->course_id,
            'birthday' => $request->birthday,
            'image' =>$request->file('image')->store('public/teacher'),
        ]);


        // Create User record
        
        // Create User record
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Hash the password
            'role_id' => $request->role_id,
        ]);
        return redirect('view_teachers')->with('success', 'Admission uploaded successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $teachers= Teacher::latest()->get();
        return view('Admin.Teacher.view_teachers', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        $courses= Course::latest()->get();
        return view('Admin.Teacher.edit_teacher', compact('teacher','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        if($request->has('image')){
            $image=$request->file('image')->store('public/teacher');
            Storage::delete($request->image);
        }else{
            $image = $teacher->image;
        }
        $teacher->update([
            'name' => $request->name,
            'l_name' => $request->l_name,
            'job_designation' => $request->job_designation,
            'city' => $request->city,
            'region' => $request->region,
            'postal' => $request->postal,
            'country' => $request->country,
            'phone' => $request->phone,
            'birthday' => $request->birthday,
            'course_id' => $request->course_id,
            'image'=>$image,
        ]);
        return redirect('view_teachers');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        Storage::delete($teacher->image);
        $teacher->delete();
        return redirect('view_teachers');
    }

    public function teacher_profile_view(Teacher $teacher){
        return view('Admin.Teacher.teacher_profile_view', compact('teacher'));
    }
}
