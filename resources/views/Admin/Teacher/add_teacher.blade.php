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
            <h1 class="fw-normal">TEACHER JOB ADMISSIONS FORM</h1>
            <p class="text-secondary">Enter your admission information below</p>
        </div>

        <form action="{{ route('teacher_store') }}" method="post" enctype="multipart/form-data">
            @csrf

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            <h5 class=" pb-2">Teacher Name</h5>

            <div class="row gp-3">
                <div class="col-6">
                    <label class="pt-2 col-form-label" for="">First Name</label>
                    <input type="text" class="form-control"
                        @error('name')
                        is invalid
                    @enderror
                        aria-label="First name" name="name" placeholder="First Name" />
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-6">
                    <label class="pt-2 col-form-label" for="">Last Name</label>
                    <input type="text" class="form-control"
                        @error('l_name')
                        is invalid
                    @enderror
                        aria-label="Last name" name="l_name" placeholder="last Name" />
                    @error('l_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>


            <div class="row gp-3">
                <div class="col-6">
                    <div class="form-group">

                        <label class="pt-2 col-form-label" for="">Job Designation</label>
                        <input type="text" class="form-control"
                            @error('job_designation')
                            is invalid
                        @enderror
                            placeholder="Job Designation" name="job_designation" />
                        @error('job_designation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label class="pt-2 col-form-label" for="">Phone</label>
                        <input id="postfix0" type="text" class="form-control"
                            @error('phone')
                            is invalid
                        @enderror
                            placeholder="(000) 000-0000" name="phone" />
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <div class="form-group">
                        <label class="pt-2 col-form-label" for="">Course Name</label>
                        <select name="course_id" id="" class="form-control"
                            @error('course_name')
                            is invalid
                        @enderror>
                            @error('course_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <option value=""></option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">

                        <label class="pt-2 col-form-label" for="">Birthday</label>
                        <input type="date" class="form-control"
                            @error('birthday')
                           is invalid 
                        @enderror
                            placeholder="Birthday" name="birthday" />
                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <label class="pt-2 col-form-label" for="">City</label>
                    <input type="text" class="form-control"
                        @error('city')
                        is invalid
                    @enderror name="city"
                        placeholder="Caty" />
                    @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-6">
                    <label class="pt-2 col-form-label" for="">Region</label>
                    <input type="text" class="form-control"
                        @error('region')
                        is invalid
                    @enderror name="region"
                        placeholder="Region" />
                    @error('region')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row gp-3">
                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label class="pt-2 col-form-label" for="">Postal / Zip Code</label>
                        <input id="postfix8" type="number" class="form-control"
                            @error('postal')
                            is invalid
                        @enderror
                            placeholder="Zip Code" name="postal" />
                        @error('postal')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group">

                        <label class="pt-2 col-form-label" for="">Country</label>
                        <select class="form-control"
                            @error('country')
                            is invalid
                        @enderror
                            name="country">
                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <option></option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Finland">Finland</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Colombia">Colombia</option>
                            <option value="China">China</option>
                            <option value="Chile">Chile</option>
                            <option value="Canada">Canada</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Burundi">Burundi</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row gp-3">

                <div class="col-4">
                    <label class="form-label" for="email"
                        class="col-md-4 col-form-label ">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email"
                        placeholder="emailaddress123@gmail.com">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-4">
                    <label class="form-label" for="password"
                        class="col-md-4 col-form-label ">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="New Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-4">
                    <label class="form-label" for="password-confirm"
                        class="col-md-4 col-form-label ">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Confirm Password">
                </div>
            </div>
            <input type="hidden" name="role_id" value="2">

            <div class="mb-3">
                <label class="pt-2 col-form-label" for="">Image</label>
                <input type="file" class="form-control"
                    @error('image')
                    is invalid
                @enderror id="recipient-name"
                    name="image" placeholder="Image">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_teachers') }}" class="btn btn-light">Cencel</a>
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
