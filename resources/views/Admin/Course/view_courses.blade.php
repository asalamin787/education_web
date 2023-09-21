@extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">All Courses </h4>
            <a href="{{route('add_course')}}" class="btn btn-primary">+ Add new</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $course)
                            <tr>
                                <td scope="row">{{ $course->id }}</td>
                                <td scope="row">{{ $course->course_name }}</td>
                                <td scope="row">{{ $course->description }}</td>

                                <td>
                                    <a href="{{route('edit_course', $course)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('delete_course', $course)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i>Delete</a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
