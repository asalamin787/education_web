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
            <h1 class="fw-normal">TEACHER ADMISSIONS FORM</h1>
            <p class="text-secondary">Enter your admission information below</p>
        </div>

        <form action="{{ route('update_teacher', $teacher) }}" method="post" enctype="multipart/form-data">
            @csrf

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <div class="row gp-3">
                <div class="col-6">
                    <label class="col-form-label" for="">First Name</label>
                    <input type="text" class="form-control" aria-label="First name" name="name" value="{{$teacher->name}}"/>
                </div>
                <div class="col-6">
                    <label class="col-form-label" for="">Last Name</label>
                    <input type="text" class="form-control" aria-label="Last name" name="l_name" value="{{$teacher->l_name}}"
                        placeholder="Optional" />
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <div class="form-group">

                        <label class="col-form-label" for="">Job Designation</label>
                        <input type="text" class="form-control" placeholder="Job Designation" name="job_designation" value="{{$teacher->job_designation}}" />
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label class="col-form-label" for="">Phone</label>
                        <input id="postfix0" type="text" class="form-control" value="{{$teacher->phone}}"
                            placeholder="(000) 000-0000" name="phone" />
                        <p id="error-message0" style="color: red;"></p>
                    </div>
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <div class="form-group">

                        <label class="col-form-label" for="">Course Name</label>
                        <select name="course_name" id="" class="form-control">
                            @foreach($courses as $course)
                            <option @if($teacher->course_name== $course->course_name) selected @endif value="{{$course->course_name}}">{{$course->course_name}}</option>
                            @endforeach
                          
                           </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">

                        <label class="col-form-label" for="">Birthday</label>
                        <input type="date" class="form-control" placeholder="Course Dates" value="{{$teacher->birthday}}"
                            name="birthday" />
                    </div>
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <label class="col-form-label" for="">City</label>
                    <input type="text" class="form-control" aria-label="First name" name="city" value="{{$teacher->city}}" />
                </div>
                <div class="col-6">
                    <label class="col-form-label" for="">Region</label>
                    <input type="text" class="form-control" aria-label="Last name" name="region" value="{{$teacher->region}}" />
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label class="col-form-label" for="">Postal / Zip Code</label>
                        <input id="postfix8" type="text" class="form-control" placeholder="(000 000)" value="{{$teacher->postal}}"
                            name="postal" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">

                        <label class="col-form-label" for="">Country</label>
                        <select class="form-control" name="country" placeholder="Select your country">
                            <option {{ $teacher->country == 'Bangladesh' ? 'selected' : '' }} value="Bangladesh">Bangladesh</option>
                            <option {{ $teacher->country == 'Barbados' ? 'selected' : '' }} value="Barbados">Barbados</option>
                            <option {{ $teacher->country == 'Belarus' ? 'selected' : '' }} value="Belarus">Belarus</option>
                            <option {{ $teacher->country == 'Belgium' ? 'selected' : '' }} value="Belgium">Belgium</option>
                            <option {{ $teacher->country == 'Belize' ? 'selected' : '' }} value="Belize">Belize</option>
                            <option {{ $teacher->country == 'Benin' ? 'selected' : '' }} value="Benin">Benin</option>
                            <option {{ $teacher->country == 'Bermuda' ? 'selected' : '' }} value="Bermuda">Bermuda</option>
                            <option {{ $teacher->country == 'Bhutan' ? 'selected' : '' }} value="Bhutan">Bhutan</option>
                            <option {{ $teacher->country == 'Bolivia' ? 'selected' : '' }} value="Bolivia">Bolivia</option>
                            <option {{ $teacher->country == 'Denmark' ? 'selected' : '' }} value="Denmark">Denmark</option>
                            <option {{ $teacher->country == 'Botswana' ? 'selected' : '' }} value="Botswana">Botswana</option>
                            <option {{ $teacher->country == 'Finland' ? 'selected' : '' }} value="Finland">Finland</option>
                            <option {{ $teacher->country == 'Brazil' ? 'selected' : '' }} value="Brazil">Brazil</option>
                            <option {{ $teacher->country == 'Colombia' ? 'selected' : '' }} value="Colombia">Colombia</option>
                            <option {{ $teacher->country == 'China' ? 'selected' : '' }} value="China">China</option>
                            <option {{ $teacher->country == 'Chile' ? 'selected' : '' }} value="Chile">Chile</option>
                            <option {{ $teacher->country == 'Canada' ? 'selected' : '' }} value="Canada">Canada</option>
                            <option {{ $teacher->country == 'Cameroon' ? 'selected' : '' }} value="Cameroon">Cameroon</option>
                            <option {{ $teacher->country == 'Bulgaria' ? 'selected' : '' }} value="Bulgaria">Bulgaria</option>
                            <option {{ $teacher->country == 'Cambodia' ? 'selected' : '' }} value="Cambodia">Cambodia</option>
                            <option {{ $teacher->country == 'Burundi' ? 'selected' : '' }} value="Burundi">Burundi</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row gp-3 mb-3">
                <div class="col-12">
                    <div class="form-group">

                        <label class="col-form-label" for="">Email Address </label>
                        <input type="email" class="form-control" placeholder="" value="{{$teacher->email}}"
                            name="email" />
                    </div>
                </div>
            </div>

            <div class="mb-3 mb-3">
                <img class="mb-2" src="{{ Storage::url($teacher->image) }}" alt="" height="100">
                <div class="form-group">
                    <label class="col-form-label" for="">Image</label>
                    <input type="file" class="form-control" id="recipient-name" name="image" value="{{$teacher->image}}">
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{route('view_teachers')}}" class="btn btn-light">Cencel</a>
            </div>


        </form>
    </div>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //student Phone number//
        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix0').on('input', function() {
                // Get the current value of the input field
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Update the input value with the numeric-only value
                $(this).val(numericValue);

                // Check if the length of the input exceeds 5 characters
                if (numericValue.length > 11) {
                    // Truncate the input to 5 characters
                    $(this).val(numericValue.slice(0, 11));

                    // Display an error message
                    $('#error-message0').text('Maximum 11 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message0').text('');
                }
            });
        });

        //Phone number end//

        //Emergency Phone number//

        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix3').on('input', function() {
                // Get the current value of the input field
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Update the input value with the numeric-only value
                $(this).val(numericValue);

                // Check if the length of the input exceeds 5 characters
                if (numericValue.length > 11) {
                    // Truncate the input to 5 characters
                    $(this).val(numericValue.slice(0, 11));

                    // Display an error message
                    $('#error-message3').text('Maximum 11 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message3').text('');
                }
            });
        });

        //Phone number end//


        //Postal / Zip Code //

        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix8').on('input', function() {
                // Get the current value of the input field
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Update the input value with the numeric-only value
                $(this).val(numericValue);

                // Check if the length of the input exceeds 5 characters
                if (numericValue.length > 6) {
                    // Truncate the input to 5 characters
                    $(this).val(numericValue.slice(0, 6));

                    // Display an error message
                    $('#error-message8').text('Maximum 6 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message8').text('');
                }
            });
        });

        //Postal / Zip Code End//
    </script> --}}
@endsection
