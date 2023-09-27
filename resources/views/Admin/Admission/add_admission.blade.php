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

        <form action="{{ route('admission_store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- error check  --}}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            <h5 class="mb-2">Student Address</h5>

            <div class="row g-3 mb-3">
                <div class="col-4">
                    <label class="form-label" for="">First Name</label>
                    <input type="text" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror" aria-label="First name" name="name"
                        placeholder="First Name" />
                    @error('name')
                        <p class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>

                <div class="col-4">
                    <label class="form-label" for="">Middle Initial</label>
                    <input type="text" value="{{ old('m_name') }}" class="form-control" aria-label="Last name"
                        name="m_name" placeholder="Optional" />
                </div>

                <div class="col-4">
                    <label class="form-label" for="">Last Name</label>
                    <input type="text" value="{{ old('l_name') }}"
                        class="form-control @error('l_name')
                            is-invalid
                        @enderror"
                        aria-label="Last name" name="l_name" placeholder="Last Name" />
                    @error('l_name')
                        <p class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>
            </div>



            <div class="row g-3 mb-3">
                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label" for="">Roll No</label>
                        <input id="postfix0" value="{{ old('roll') }}" type="text"
                            class="form-control @error('roll')
                            is-invalid
                        @enderror"
                            placeholder="Roll No" name="roll" />
                        @error('roll')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror

                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label" for="">Registration No</label>
                        <input id="postfix6" value="{{ old('registration') }}" type="text"
                            class="form-control @error('registration')
                            is-invalid
                        @enderror"
                            placeholder="Registration" name="registration" />
                        @error('registration')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">

                        <label class="form-label" for="">Course Name</label>
                        <select name="course" id=""
                            class="form-control @error('course')
                                is-invalid
                            @enderror">
                            <option value=""></option>
                            @foreach ($courses as $course)
                                <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
                            @endforeach

                        </select>
                        @error('course')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="row g-3 mb-3">
                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label" for="form2">Birthday</label>
                        <input id="postfix" value="{{ old('birthday') }}" type="date"
                            class="form-control @error('birthday')
                                is-invalid
                            @enderror"
                            name="birthday" placeholder="Birthday" />
                        @error('birthday')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label" for="">Gender</label>
                        <select
                            class="form-control @error('gender')
                                is-invalid
                            @enderror"
                            name="gender" placeholder="Gender">
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        @error('gender')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label" for="">Phone</label>
                        <input id="postfix0" value="{{ old('phone') }}" type="tel"
                            class="form-control @error('phone')
                            is-invalid
                        @enderror"
                            placeholder="(000) 000-0000" name="phone" />
                        @error('phone')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="row g-3 mb-3">
                <div class="col-4">
                    <label class="form-label" for="">Father Name</label>
                    <input type="text" value="{{ old('father') }}"
                        class="form-control @error('father')
                            is-invalid
                        @enderror"
                        aria-label="First name" name="father" placeholder="Father Name" />
                    @error('father')
                        <p class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>

                <div class="col-4">
                    <label class="form-label"for="">Mother Name</label>
                    <input type="text" value="{{ old('mother') }}"
                        class="form-control @error('mother')
                            is-invalid
                        @enderror"
                        aria-label="Last name" name="mother" placeholder="Mother Name" />
                    @error('mother')
                        <p class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>

                <div class="col-4">
                    <label class="form-label" for="">Blood Group</label>
                    <input type="text" value="{{ old('blood') }}"
                        class="form-control @error('blood')
                            is-invalid
                        @enderror"
                        aria-label="Last name" name="blood" placeholder="Blood Group" />
                    @error('name')
                        <p class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </p>
                    @enderror
                </div>
            </div>


            <div class="row g-3 mb-3">
                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label" for="form2">Country</label>
                        <input id="postfix1" value="{{ old('country') }}" type="text"
                            class="form-control @error('country')
                            is-invalid
                        @enderror"
                            name="country" placeholder="Country" />
                        @error('country')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label class="form-label" for="">City</label>
                        <input type="text" value="{{ old('city') }}"
                            class="form-control @error('city')
                            is-invalid
                        @enderror"
                            aria-label="Last name" name="city" placeholder="City" />
                        @error('city')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group"> <!-- Date input -->
                        <label class="form-label" for="">Postal / Zip Code</label>
                        <input id="postfix3" value="{{ old('postal') }}" type="number"
                            class="form-control @error('postal')
                            is-invalaid
                        @enderror"
                            placeholder="(000) 000" name="postal" />
                        @error('postal')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>



            </div>

            <div class="row gp-3 mb-3">

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
            <input type="hidden" name="role_id" value="3">

            <h5 class=" mb-3">Emergency Contact</h5>

            <div class="row g-3 mb-3">
                <div class="col-6">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group"> <!-- Date input -->
                                <label for="">First Name</label>
                                <input type="text" value="{{ old('prs_f_name') }}"
                                    class="form-control @error('prs_f_name')
                                        is-invalid
                                    @enderror"
                                    aria-label="First name" name="prs_f_name" placeholder="First Name" />
                                @error('prs_f_name')
                                    <p class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group"> <!-- Date input -->
                                <label for="">Last Name</label>
                                <input type="text" value="{{ old('prs_l_name') }}"
                                    class="form-control @error('prs_l_name')
                                       is-invalid 
                                    @enderror"
                                    aria-label="Last name" name="prs_l_name" placeholder="Last Name" />
                                @error('prs_l_name')
                                    <p class="invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label for="">Relationship</label>
                        <input type="text" value="{{ old('relationship') }}"
                            class="form-control @error('relationship')
                                is-invalid
                            @enderror"
                            aria-label="First name" name="relationship" placeholder="Relationship" />
                        @error('relationship')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="row g-3 mb-3">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">E-mail Address</label>
                        <input type="email" value="{{ old('prs_email') }}"
                            class="form-control @error('prs_email')
                            is-invalid
                        @enderror"
                            aria-label="Last name" name="prs_email" placeholder="emailaddress123@gmail.com" />
                        @error('prs_email')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>

                <div class="col-6">
                    <div class="form-group"> <!-- Date input -->
                        <label for="">Phone Number</label>
                        <input id="postfix3" value="{{ old('prs_phone') }}" type="tel"
                            class="form-control @error('prs_phone')
                            is-invalaid
                        @enderror"
                            placeholder="(000) 000-0000" name="prs_phone" />
                        @error('prs_phone')
                            <p class="invalid-feedback">
                                <strong>{{ $message }}</strong>
                            </p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="mb-3 mb-3">
                <input type="file" class="form-control" id="recipient-name" name="image">
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_admissions') }}" class="btn btn-light">Cencel</a>
            </div>


        </form>
    </div>
@endsection
