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

        <form action="{{route('update_admission', $admission->id)}}" method="post">
            @csrf

            <h5 class=" pb-2">Student Address</h5>
            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-4">
                        <label class="pt-2" for="">First Name</label>
                        <input type="text" class="form-control" aria-label="First name" name="name" value="{{$admission->name}}" />
                    </div>
                    <div class="col-4">
                        <label class="pt-2" for="">Middle Initial</label>
                        <input type="text" class="form-control" aria-label="Last name" name="m_name"
                            placeholder="Optional" value="{{$admission->m_name}}" />
                    </div>
                    <div class="col-4">
                        <label class="pt-2" for="">Last Name</label>
                        <input type="text" class="form-control" aria-label="Last name" name="l_name" value="{{$admission->l_name}}" />
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="form-group"> <!-- Date input -->
                            <label for="">Roll No</label>
                            <input id="postfix5" type="text" class="form-control" name="roll" value="{{$admission->roll}}" />
                            <p id="error-message5" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group"> <!-- Date input -->
                            <label for="">Registration No</label>
                            <input id="postfix6" type="text" class="form-control" placeholder="(0000) 0000-0000" name="registration" value="{{$admission->registration}}" />
                            <p id="error-message6" style="color: red;"></p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">

                            <label for="">Course</label>
                            <select class="form-control" name="course">
                                <option value="">Select your course</option>
                                <option {{ $admission->course == 'html' ? 'selected' : '' }} value="html">HTML</option>
                                <option {{ $admission->course == 'css' ? 'selected' : '' }} value="css">CSS</option>
                                <option {{ $admission->course == 'javascript' ? 'selected' : '' }} value="javascript">JavaScript</option>
                                <option {{ $admission->course == 'angular' ? 'selected' : '' }} value="angular">Angular</option>
                                <option {{ $admission->course == 'react' ? 'selected' : '' }} value="react">React</option>
                                <option {{ $admission->course == 'vue.js' ? 'selected' : '' }} value="vue.js">Vue.js</option>
                                <option {{ $admission->course == 'ruby' ? 'selected' : '' }} value="ruby">Ruby</option>
                                <option {{ $admission->course == 'php' ? 'selected' : '' }} value="php">PHP</option>
                                <option {{ $admission->course == 'asp.net' ? 'selected' : '' }} value="asp.net">ASP.NET</option>
                                <option {{ $admission->course == 'python' ? 'selected' : '' }} value="python">Python</option>
                                <option {{ $admission->course == 'mysql' ? 'selected' : '' }} value="mysql">MySQL</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-4">
                        <div class="form-group"> <!-- Date input -->
                            <label class="form-label" for="form2">Birthday</label>
                            <input id="postfix" type="date" class="form-control" name="birthday" value="{{$admission->birthday}}" />
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group"> <!-- Date input -->
                            <label class="mb-2" for="">Gender</label>
                            <select class="form-control" name="gender">
                                <option value="">Select your gender identity</option>
                                <option {{ $admission->gender == 'male' ? 'selected' : '' }} value="male">Male</option>
                                <option {{ $admission->gender == 'female' ? 'selected' : '' }} value="female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group"> <!-- Date input -->
                            <label class="form-label" for="form2">Student Id</label>
                            <input id="postfix4" type="text" class="form-control" placeholder="Optional" name="student_id" value="{{$admission->student_id}}" />
                            <p id="error-message4" style="color: red;"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="row g-3">
                    <div class="col-4">
                        <label class="pt-2" for="">Father Name</label>
                        <input type="text" class="form-control" aria-label="First name" name="father" value="{{$admission->father}}" />
                    </div>
                    <div class="col-4">
                        <label class="pt-2" for="">Mother Name</label>
                        <input type="text" class="form-control" aria-label="Last name" name="mother" value="{{$admission->mother}}" />
                    </div>
                    <div class="col-4">
                        <label class="pt-2" for="">Blood Group</label>
                        <input type="text" class="form-control" aria-label="Last name" name="blood" value="{{$admission->blood}}" />
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label" for="form2">Country</label>
                        <input id="postfix1" type="text" class="form-control" name="country" value="{{$admission->country}}" />
                    </div>
                </div>

                <div class="col-8">
                    <div class="form-group">
                        <label class="mb-2" for="">Of which country are you a citizen?</label>
                        <input type="text" class="form-control" aria-label="Last name" name="which_country" value="{{$admission->which_country}}" />
                    </div>
                </div>
            </div>


            <div class="row g-3 mb-3">
                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label for="">Phone</label>
                        <input id="postfix0" type="text" class="form-control" placeholder="(000) 000-0000" name="phone" value="{{$admission->phone}}" />
                        <p id="error-message0" style="color: red;"></p>
                    </div>
                </div>

                <div class="col-8">
                    <div class="form-group">
                        <label for="">E-mail Address</label>
                        <input type="email" class="form-control" aria-label="Last name" placeholder="" name="email" value="{{$admission->email}}" />
                    </div>
                </div>
            </div>

            <h5 class=" pb-2">Mailing Address</h5>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">

                        <label class="pt-2" for="">Street Address</label>
                        <input type="text" class="form-control" aria-label="Last name" placeholder="" name="street" value="{{$admission->street}}" />
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">

                        <label class="pt-2" for="">Street Address Line 2</label>
                        <input type="text" class="form-control" aria-label="Last name" placeholder="" name="street_2" value="{{$admission->street_2}}" />
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-6">
                    <div class="form-group">
                        <label class="pt-2" for="">City</label>
                        <input type="text" class="form-control" aria-label="Last name" placeholder="" name="city" value="{{$admission->city}}" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label class="pt-2" for="">State / Province</label>
                        <input type="text" class="form-control" aria-label="Last name" placeholder="" name="state" value="{{$admission->state}}" />
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group"> <!-- Date input -->
                        <label for="">Postal / Zip Code</label>
                        <input id="postfix8" type="text" class="form-control" placeholder="(000 000)" name="postal" value="{{$admission->postal}}" />
                        <p id="error-message8" style="color: red;"></p>
                    </div>
                </div>
            </div>


            <div class="mb-3">
                <h5 class=" pb-2">Emergency Contact</h5>
                <div class="row g-3">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group"> <!-- Date input -->
                                    <label class="pt-2" for="">First Name</label>
                                    <input type="text" class="form-control" aria-label="First name" name="prs_f_name" value="{{$admission->prs_f_name}}" />
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group"> <!-- Date input -->
                                    <label class="pt-2" for="">Last Name</label>
                                    <input type="text" class="form-control" aria-label="First name" name="prs_l_name" value="{{$admission->prs_l_name}}" />
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-6">
                        <div class="form-group"> <!-- Date input -->
                            <label for="" class="mt-2">Relationship</label>
                            <input type="text" class="form-control" aria-label="First name" name="relationship" value="{{$admission->relationship}}" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mb-3 border-bottom">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">E-mail Address</label>
                        <input type="email" class="form-control" aria-label="Last name" placeholder="" name="prs_email" value="{{$admission->prs_email}}" />
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label for="">Phone Number</label>
                        <input id="postfix3" type="text" class="form-control" placeholder="(000) 000-0000" name="prs_phone" value="{{$admission->prs_phone}}" />
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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

        //student Phone number end//

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

        //Emergency Phone number end//

        //student Id //

        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix4').on('input', function() {
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
                    $('#error-message4').text('Maximum 6 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message4').text('');
                }
            });
        });

        //student Id end //


        //student Roll No //

        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix5').on('input', function() {
                // Get the current value of the input field
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Update the input value with the numeric-only value
                $(this).val(numericValue);

                // Check if the length of the input exceeds 5 characters
                if (numericValue.length > 8) {
                    // Truncate the input to 5 characters
                    $(this).val(numericValue.slice(0, 8));

                    // Display an error message
                    $('#error-message5').text('Maximum 8 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message5').text('');
                }
            });
        });

        //student Roll No End//

        //student Registration No //

        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix6').on('input', function() {
                // Get the current value of the input field
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Update the input value with the numeric-only value
                $(this).val(numericValue);

                // Check if the length of the input exceeds 5 characters
                if (numericValue.length > 12) {
                    // Truncate the input to 5 characters
                    $(this).val(numericValue.slice(0, 12));

                    // Display an error message
                    $('#error-message6').text('Maximum 12 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message6').text('');
                }
            });
        });

        //student Registration No End//

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
    </script>
@endsection
