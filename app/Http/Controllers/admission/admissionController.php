<?php

namespace App\Http\Controllers\admission;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class admissionController extends Controller
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
        return view('Admin.Admission.add_admission', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admission=Admission::latest()->first();
        if($admission==null){
            $roll=12312001;
            $reg=14151401;
        }else{
            $roll=$admission->roll+1;
            $reg=$admission->registration+1;
        }
        // dd($admission==null);
        $request->validate([
            'name' => 'required',
            'l_name' => 'required',
            'course_id' => 'required',
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
  
        Admission::create([
            'name' => $request->name,
            'l_name' => $request->name,
            'roll' => $roll,
            'registration' => $reg,
            'course_id' => $request->course_id,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'father' => $request->father,
            'mother' => $request->mother,
            'blood' => $request->blood,
            'country' => $request->country,
            'phone' => $request->phone,
            'city' => $request->city,
            'postal' => $request->postal,
            'email' => $request->email,
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

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $admissions = Admission::latest()->get();
        return view('Admin.Admission.view_admissions', compact('admissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission $admission)
    {
        $courses= Course::latest()->get();
        // dd($student);
        return view('Admin.Admission.edit_admission', compact('admission','courses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admission $admission)
    {
        if($request->has('image')){
            $image=$request->file('image')->store('public/admission');
            Storage::delete($request->image);
        }else{
            $image = $admission->image;
        }
        $admission->update([
            'name' => $request->name,
            'l_name' => $request->l_name,
            'course_id' => $request->course_id,
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission $admission)
    {
        Storage::delete($admission->image);
        $admission->delete();
        return redirect('view_admissions');
    }

    public function student_profile_view(Admission $admission){
        return view('Admin.Admission.student_profile_view', compact('admission'));
    }
}
