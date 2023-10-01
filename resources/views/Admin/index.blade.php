@extends('Admin.Layouts.main')
{{--  --}}
@section('content')
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

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-xl-4 row-cols-xxl-4">
        <div class="col">
            <div class="card radius-10 border-0 border-start border-primary border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">


                        <div class="">
                            <p class="mb-1">Total Students</p>

                            <h4 class="mb-0 text-primary">{{ $admissions->count() }}</h4>

                        </div>

                        <div class="ms-auto widget-icon bg-primary text-white">
                            <i class="bi bi-basket2-fill"></i>
                        </div>
                    </div>
                    <div class="progress mt-3" style="height: 4.5px;">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-0 border-start border-success border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">Total Teacher</p>
                            <h4 class="mb-0 text-success">{{ $teacher->count() }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-success text-white">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                    </div>
                    <div class="progress mt-3" style="height: 4.5px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-0 border-start border-danger border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">Totel Course</p>
                            <h4 class="mb-0 text-danger">{{ $course->count() }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-danger text-white">
                            <i class="bi bi-graph-down-arrow"></i>
                        </div>
                    </div>
                    <div class="progress mt-3" style="height: 4.5px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10 border-0 border-start border-warning border-4">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <p class="mb-1">Totel Users</p>
                            <h4 class="mb-0 text-warning">{{ Auth::user()->count() }}</h4>
                        </div>
                        <div class="ms-auto widget-icon bg-warning text-dark">
                            <i class="bi bi-people-fill"></i>
                        </div>
                    </div>
                    <div class="progress mt-3" style="height: 4.5px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->


    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Sales Overview</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button type="button" class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Statistic</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart2"></div>
                </div>
                <ul class="list-group list-group-flush mb-0">
                    <li
                        class="list-group-item border-top d-flex justify-content-between align-items-center bg-transparent">
                        Mobile<span class="badge bg-success rounded-pill">25%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                        Desktop<span class="badge bg-primary rounded-pill">65%</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent">
                        Tablet<span class="badge bg-danger rounded-pill">10%</span>
                    </li>
                </ul>
            </div>
        </div>

    </div><!--end row-->


    <div class="row">
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card w-100">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Team Members</h6>
                        </div>
                        {{-- <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="team-list">
                        @foreach ($admissions as $admission)
                            <div class="d-flex align-items-center gap-3">
                                <div class="">
                                    <img src="{{ Storage::url($admission->image) }}" alt="" width="50"
                                        height="50" class="rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-bold">{{ $admission->name }} {{ $admission->l_name }}</h6>
                                    <span
                                        class="badge bg-success bg-success-subtle text-success border border-opacity-25 border-success">ONLINE</span>
                                </div>
                                <div class="">
                                    <a href="{{route('payment_students_view', $admission)}}"
                                        class="btn btn-outline-primary rounded-5 btn-sm px-3">View</a>
                                </div>
                            </div>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-4 d-flex">
            <div class="card w-100">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Courses list</h6>
                        </div>
                        {{-- <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="team-list">
                        @foreach ($course as $course)
                            <div class="d-flex align-items-center gap-3">
                                {{-- <div class="">
                                <img src="" alt="" width="50" height="50"
                                    class="rounded-circle">
                            </div> --}}
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-bold">{{ $course->course_name }}</h6>
                                    <strong class="mb-1 fw-bold">{{ $course->admissions->count() }}</strong>
                                </div>
                                <div class="">
                                    <a href="{{route('course_students_view', $course)}}"
                                        class="btn btn-outline-primary rounded-5 btn-sm px-3">View</a>
                                </div>

                            </div>
                            <hr>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card w-100">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Projects</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="card-body">
                    <div class="team-list">
                        @foreach ($admissions as $admission)
                            <div class="d-flex align-items-center gap-3">
                                <div class="">
                                <img src="" alt="" width="50" height="50"
                                    class="rounded-circle">
                            </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1 fw-bold"></h6>
                                    <strong class="mb-1 fw-bold">{{$admission->payments}}</strong>
                                </div>
                                <div class="">
                                    <a href=""
                                        class="btn btn-outline-primary rounded-5 btn-sm px-3">View</a>
                                </div>
        
                            </div>
                            <hr>
                        @endforeach
        
                    </div>
                </div> --}}
            </div>
        </div>
        
    </div><!--end row-->


    <div class="row">
        <div class="col-12 col-lg-12 col-xl-6">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Monthly Views</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-12 col-xl-6">
            <div class="card">
                <div class="card-header bg-transparent">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <h6 class="mb-0 fw-bold">Monthly Users</h6>
                        </div>
                        <div class="dropdown ms-auto">
                            <button type="button"
                                class="btn-option dropdown-toggle dropdown-toggle-nocaret cursor-pointer"
                                data-bs-toggle="dropdown"><i class="bi bi-three-dots fs-4"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:;">Action</a>
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:;">Something else here</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="chart4"></div>
                </div>
            </div>
        </div>
    </div><!--end row-->


    <div class="card">
        <div class="card-body">
            <div class="customer-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th>Order Id</th>
                                <th>Price</th>
                                <th>Customer</th>
                                <th>Payment Status</th>
                                <th>Completed Payment</th>
                                <th>Delivery Type</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#2415</a>
                                </td>
                                <td>$98</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/01.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i
                                            class="bi bi-check2 ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#7845</a>
                                </td>
                                <td>$110</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/02.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i
                                            class="bi bi-info-circle ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i
                                            class="bi bi-check2-all ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#5674</a>
                                </td>
                                <td>$86</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/03.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-primary-subtle text-primary rounded border border-primary-subtle font-text2 fw-bold">Completed<i
                                            class="bi bi-check2-all ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#6678</a>
                                </td>
                                <td>$78</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/04.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Paid<i
                                            class="bi bi-check2 ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#2367</a>
                                </td>
                                <td>$69</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/05.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i
                                            class="bi bi-info-circle ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#9870</a>
                                </td>
                                <td>$49</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/06.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i
                                            class="bi bi-check2 ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox">
                                </td>
                                <td>
                                    <a href="javascript:;">#3456</a>
                                </td>
                                <td>$65</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="assets/images/avatars/07.png" class="rounded-circle" width="40"
                                                height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">Andrew Carry</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Completed<i
                                            class="bi bi-check2 ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Failed<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td>Cash on delivery</td>
                                <td>Nov 12, 10:45 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!--end main content-->
@endsection
