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
            <h1 class="fw-normal">COURSE FORM</h1>
            <p class="text-secondary">Enter your course information below</p>
        </div>

        <form action="{{ route('course_store') }}" method="post">
            @csrf

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">

                        <label class="pt-2" for="">Course Name</label>
                        <input type="text" class="form-control @error('course_name') is-invalid @enderror"
                            aria-label="Last name" placeholder="" name="course_name" />
                        @error('course_name')
                            <p class="invalid-feedback">
                                <strong>{{ $message }} </strong>
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <label for="">Description</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                        placeholder="Your course description">
                    @error('description')
                        <p class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_courses') }}" class="btn btn-light">Cencel</a>
            </div>


        </form>
    </div>
@endsection
