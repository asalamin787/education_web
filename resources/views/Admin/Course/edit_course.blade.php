@extends('Admin.Layouts.main')
@section('content')
    <div class="container overflow-hidden mb-4">

        <div class="row g-2 py-4 mb-3 border-bottom">
            <div class="col-6">
                <img style="width: 100%;" src="{{ asset('assets/images/admission/Asset.png') }}" alt="">
            </div>

            <div class="col-6 text-end">
                <h3 class="mb-0 fw-bold">ACME CITY COLLEGE</h3>
                <p class="mb-0">123 Maple Street, Houston, TX, 77002</p>
                <small>example@example.com</small><br>
                <small>www.example.com</small><br>
                <small>(123) 1234567</small>
            </div>
        </div>

        <div class="mb-3">
            <h1 class="fw-normal">EGIT COURSE</h1>
            <p class="text-secondary">Enter your course information below</p>
        </div>
        
        <form action="{{route('update_course', $course)}}" method="post">
            @csrf

            {{-- error check  --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            
            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">

                        <label class="form-label" for="">Course Name</label>
                        <input type="text" class="form-control" aria-label="Last name" placeholder=""
                            name="course_name" value="{{ $course->course_name }}" />
                    </div>
                </div>
            </div>
           
            <div class="row mb-4">
                <div class="col-12">
                    <label class="form-label" for="">Description</label>
                    <input type="text" class="form-control" name="description" value="{{ $course->description }}" placeholder="Your course description">
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 ">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('view_courses')}}" class="btn btn-light">Cencel</a>
            </div>


        </form>
    </div>

@endsection
