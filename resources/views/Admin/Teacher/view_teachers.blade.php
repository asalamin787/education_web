{{-- @extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Teachers </h4>
            <a href="{{ route('add_teacher') }}" class="btn btn-primary">+ Add new</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Teacher Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Job Designation</th>
                            <th scope="col">Phone</th>
                            <th scope="col">E-mail Address</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Country</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td scope="row">{{ $teacher->id }}</td>
                                <td scope="row">{{ $teacher->name }} {{ $teacher->l_name }}</td>
                                <td scope="row"><img
                                        style="width: 60px; height:60px;"src="{{ Storage::url($teacher->image) }}"
                                        alt=""></td>
                                <td scope="row">{{ $teacher->job_designation }}</td>
                                <td scope="row">{{ $teacher->phone }}</td>
                                <td scope="row">{{ $teacher->email }}</td>
                                <td scope="row">{{ $teacher->course ? $teacher->course->course_name : '' }}</td>
                                <td scope="row">{{ $teacher->country }}</td>

                                <td>
                                    <a href="{{ route('teacher_profile_view', $teacher) }}"
                                        class="btn btn-sm btn-success">View</a>
                                    <a href="{{ route('edit_teacher', $teacher) }}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{ route('delete_teacher', $teacher) }}" class="btn btn-sm btn-danger"><i
                                            class="la la-trash-o"></i>Delete</a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection --}}

@extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('add_teacher') }}" class="btn btn-primary mb-3">+ Add new</a>
            <div class="customer-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr class=" text-center">
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th> Id</th>
                                <th>Teacher Name</th>
                                <th>Job Designation</th>
                                <th>Country</th>
                                <th>Course Name</th>
                                <th>Phone</th>
                                <th>Email Address</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr class=" text-center">
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="javascript:;">{{ $teacher->id }}</a>
                                    </td>
                                    <td>
                                        <a class="d-flex align-items-center gap-3" href="javascript:;">
                                            <div class="customer-pic">
                                                <img src="{{ Storage::url($teacher->image) }}" class="rounded-circle"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <p class="mb-0 customer-name fw-bold">{{ $teacher->name }}
                                                {{ $teacher->l_name }}</p>
                                        </a>
                                    </td>
                                    <td>{{ $teacher->job_designation }}</td>
                                    <td>{{ $teacher->country }}</td>
                                    <td>{{ $teacher->course ? $teacher->course->course_name : '' }}</td>
                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $teacher->phone }}<i
                                                class="bi bi-check2 ms-2"></i></span></td>
                                    <td>{{$teacher->email}}</td>
                                    <td>
                                        <a href="{{ route('teacher_profile_view', $teacher) }}"
                                            class="btn btn-sm btn-success">View</a>
                                        <a href="{{ route('edit_teacher', $teacher) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ route('delete_teacher', $teacher) }}" class="btn btn-sm btn-danger"><i
                                                class="la la-trash-o"></i>Delete</a>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
