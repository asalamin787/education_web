@extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Teachers </h4>
            <a href="{{route('add_teacher')}}" class="btn btn-primary">+ Add new</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Teacher Name</th>
                            <th scope="col">School Name</th>
                            <th scope="col">Job Title</th>
                            <th scope="col">Phone</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Country</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($teachers as $teacher)
                            <tr>
                                <td scope="row">{{ $teacher->id }}</td>
                                <td scope="row">{{ $teacher->f_name }} {{ $teacher->l_name }}</td>
                                <td scope="row">{{ $teacher->school_name }}</td>
                                <td scope="row">{{ $teacher->job_title }}</td>
                                <td scope="row">{{ $teacher->phone }}</td>
                                <td scope="row">{{ $teacher->email }}</td>
                                <td scope="row">{{ $teacher->course_name}}</td>
                                <td scope="row">{{ $teacher->country}}</td>

                                <td>
                                    <a href="{{route('edit_teacher', $teacher)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('delete_teacher', $teacher)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i>Delete</a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
