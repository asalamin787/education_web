@extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Students </h4>
            <a href="{{route('add_admission')}}" class="btn btn-primary">+ Add new</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Image</th>
                            <th scope="col">Roll No</th>
                            <th scope="col">Registration No</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admissions as $admission)
                            <tr>
                                <td scope="row">{{ $admission->id }}</td>
                                <td scope="row">{{ $admission->name }} {{ $admission->m_name }} {{ $admission->l_name }}</td>
                                <td scope="row"><img style="width: 60px; height:60px;"src="{{ Storage::url($admission->image) }}" alt=""></td>
                                <td scope="row">{{ $admission->roll }}</td>
                                <td scope="row">{{ $admission->registration }}</td>
                                <td scope="row">{{ $admission->course ? $admission->course->course_name :'' }}</td>
                                <td scope="row">{{ $admission->birthday }}</td>
                                <td scope="row">{{ $admission->gender }}</td>
                                <td scope="row">{{ $admission->email }}</td>
                                <td>
                                    <a href="{{route('student_profile_view', $admission)}}" class="btn btn-sm btn-success">View</a>
                                    <a href="{{route('add_payment', $admission)}}" class="btn btn-sm btn-warning">Payment</a>
                                    <a href="{{route('edit_admission', $admission)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('delete_admission', $admission)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i>Delete</a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
