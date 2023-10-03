<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class courseController extends Controller
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
        return view('Admin.Course.add_course');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $courses = Course::latest()->get();
        return view('Admin.Course.view_courses', compact('courses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        return view('Admin.Course.edit_course', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        $course->update([
            'course_name'=>$request->course_name,
            'description'=>$request->description,
        ]);
        return redirect('view_courses');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('view_courses');
    }

    public function course_students_view(Course $course){
     
        return view('Admin.Course.course_students_view',compact('course'));
    }
}
