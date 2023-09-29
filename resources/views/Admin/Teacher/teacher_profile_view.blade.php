@extends('Admin.Layouts.main')
@section('css_link')
    <link rel="stylesheet" href="{{ asset('assets/css/steyle.css') }}">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
@endsection
@section('content')
    <div class="container emp-profile">
        <div class="col-md-12 text-end ">
            <button onclick="printDiv('printarea')" class="btn btn-success ">Print Now</button>
            <a href="{{ route('view_teachers') }}" class="btn btn-primary">Cencel</a>
            {{-- <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" /> --}}
        </div>
        <form action="" method="post" id="printarea">

            <div class="row">
                <div class="col-md-4">
                    <div class="profile-img m-3">
                        <img src="{{ Storage::url($teacher->image) }}" alt="" />
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">New Image</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="profile-head">
                        <h5>
                            {{ $teacher->name }} {{ $teacher->l_name }}
                        </h5>
                        <h6>
                            {{ $teacher->job_designation }}
                        </h6>
                        <p class="proile-rating">Course Name : <span>{{ $teacher->course ? $teacher->course->course_name :'' }}</span></p>
                        <p class="proile-rating">Birthday : <span>{{ $teacher->birthday }}</span></p>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">About Me</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                    aria-controls="profile" aria-selected="false">Contact</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    {{-- <div class="profile-work">
                        <p>WORK LINK</p>
                        <a href="">Website Link</a><br />
                        <a href="">Bootsnipp Profile</a><br />
                        <a href="">Bootply Profile</a>
                        <p>SKILLS</p>
                        <a href="">Web Designer</a><br />
                        <a href="">Web Developer</a><br />
                        <a href="">WordPress</a><br />
                        <a href="">WooCommerce</a><br />
                        <a href="">PHP, .Net</a><br />
                    </div> --}}
                </div>
                <div class="col-md-8">
                    <div class="tab-content profile-tab" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>City</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $teacher->city }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>
                                        Region</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $teacher->region }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Postal / Zip Code</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $teacher->postal }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Country</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $teacher->country }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $teacher->phone }}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>E-mail Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{ $teacher->email }}</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js_link')
    <script>
        function printDiv(divName) {
            // console.log(divName)
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
@endsection
