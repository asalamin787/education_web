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
            <h1 class="fw-normal">COLLEGE ADMISSIONS FORM</h1>
            <p class="text-secondary">Enter your admission information below</p>
        </div>

        <form action="{{ route('update_admission', $admission->id) }}" method="post">
            @csrf

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <h5 class=" pb-2">Student Address</h5>

            <div class="row g-3">
                <div class="col-4">
                    <label class="form-label" for="">First Name</label>
                    <input type="text" class="form-control" aria-label="First name" name="name"
                        value="{{ $admission->name }}" />
                </div>

                <div class="col-4">
                    <label class="form-label"  for="">Last Name</label>
                    <input type="text" class="form-control" aria-label="Last name" name="l_name"
                        value="{{ $admission->l_name }}" />
                </div>

                <div class="col-4">
                    <div class="form-group">

                        <label class="form-label"  for="">Course Name</label>
                        <select name="course_id" id="" class="form-control" placeholder="Course Name">
                            @foreach ($courses as $course)
                                <option @if ($admission->course_id == $course->id) selected @endif
                                    value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label"  for="form2">Birthday</label>
                        <input id="postfix" type="date" class="form-control" name="birthday" placeholder="Birthday"
                            value="{{ $admission->birthday }}" />
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label"  for="">Gender</label>
                        <select class="form-control" name="gender" placeholder="Gender">
                            <option></option>
                            <option {{ $admission->gender == 'male' ? 'selected' : '' }} value="male">Male</option>
                            <option {{ $admission->gender == 'female' ? 'selected' : '' }} value="female">Female
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label"  for="">Phone</label>
                        <input id="postfix0" type="text" class="form-control" placeholder="(000) 000-0000"
                            name="phone" value="{{ $admission->phone }}" />
                        <p id="error-message0" style="color: red;"></p>
                    </div>
                </div>
            </div>

            <div class="row g-3">
                <div class="col-4">
                    <label class="form-label"  for="">Father Name</label>
                    <input type="text" class="form-control" aria-label="First name" name="father"
                        value="{{ $admission->father }}" />
                </div>
                <div class="col-4">
                    <label class="form-label"  for="">Mother Name</label>
                    <input type="text" class="form-control" aria-label="Last name" name="mother"
                        value="{{ $admission->mother }}" />
                </div>
                <div class="col-4">
                    <label class="form-label"  for="">Blood Group</label>
                    <input type="text" class="form-control" aria-label="Last name" name="blood"
                        value="{{ $admission->blood }}" />
                </div>
            </div>


            <div class="row g-3">
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label"  for="form2">Country</label>
                        <input id="postfix1" type="text" class="form-control" name="country"
                            value="{{ $admission->country }}" />
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label"  for="">City</label>
                        <input type="text" class="form-control" aria-label="Last name" placeholder="" name="city"
                            value="{{ $admission->city }}" />
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label"  for="">Postal / Zip Code</label>
                        <input id="postfix8" type="text" class="form-control" placeholder="(000 000)"
                            name="postal" value="{{ $admission->postal }}" />
                        <p id="error-message8" style="color: red;"></p>
                    </div>
                </div>
            </div>

            <h5 class=" mb-3">Emergency Contact</h5>
            
            <div class="row g-3">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"> <!-- Date input -->
                                <label class="form-label"  for="">First Name</label>
                                <input type="text" class="form-control" aria-label="First name" name="prs_f_name"
                                    value="{{ $admission->prs_f_name }}" />
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"> <!-- Date input -->
                                <label class="form-label"  for="">Last Name</label>
                                <input type="text" class="form-control" aria-label="First name" name="prs_l_name"
                                    value="{{ $admission->prs_l_name }}" />
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label"  for="">Relationship</label>
                        <input type="text" class="form-control" aria-label="First name" name="relationship"
                            value="{{ $admission->relationship }}" />
                    </div>
                </div>
            </div>


            <div class="row g-3">
                <div class="col-6">
                    <div class="form-group">
                        <label class="form-label"  for="">E-mail Address</label>
                        <input type="email" class="form-control" aria-label="Last name" placeholder=""
                            name="prs_email" value="{{ $admission->prs_email }}" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label"  for="">Phone Number</label>
                        <input id="postfix3" type="text" class="form-control" placeholder="(000) 000-0000"
                            name="prs_phone" value="{{ $admission->prs_phone }}" />
                        <p id="error-message3" style="color: red;"></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_admissions') }}" class="btn btn-light">Cencel</a>
            </div>


        </form>
    </div>
@endsection
