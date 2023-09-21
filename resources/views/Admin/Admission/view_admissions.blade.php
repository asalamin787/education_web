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
                            <th scope="col">Roll No</th>
                            <th scope="col">Registration No</th>
                            <th scope="col">Course</th>
                            <th scope="col">Birthday</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Student Id</th>
                            <th scope="col">Father Name</th>
                            <th scope="col">Mother Name</th>
                            {{-- <th scope="col">Blood Group</th>
                            <th scope="col">Country</th>
                            <th scope="col">Which Country </th>
                            <th scope="col">Phone</th>
                            <th scope="col">E-mail Address</th>
                            <th scope="col">Street Address</th>
                            <th scope="col">Street Address Line 2</th>
                            <th scope="col">City</th>
                            <th scope="col">State / Province</th>
                            <th scope="col">Postal / Zip Code</th>
                            <th scope="col">Guardian Name</th>
                            <th scope="col">Relationship</th>
                            <th scope="col">Guardian E-mail</th>
                            <th scope="col">Phone Number</th> --}}
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admissions as $admission)
                            <tr>
                                <td scope="row">{{ $admission->id }}</td>
                                <td scope="row">{{ $admission->name }} {{ $admission->m_name }} {{ $admission->l_name }}</td>
                                <td scope="row">{{ $admission->roll }}</td>
                                <td scope="row">{{ $admission->registration }}</td>
                                <td scope="row">{{ $admission->course }}</td>
                                <td scope="row">{{ $admission->birthday }}</td>
                                <td scope="row">{{ $admission->gender }}</td>
                                <td scope="row">{{ $admission->student_id }}</td>
                                <td scope="row">{{ $admission->father }}</td>
                                <td scope="row">{{ $admission->mother }}</td>
                                {{-- <td scope="row">{{ $admission->blood }}</td>
                                <td scope="row">{{ $admission->country }}</td>
                                <td scope="row">{{ $admission->which_country }}</td>
                                <td scope="row">{{ $admission->phone }}</td>
                                <td scope="row">{{ $admission->stu_email }}</td>
                                <td scope="row">{{ $admission->street }}</td>
                                <td scope="row">{{ $admission->street_2 }}</td>
                                <td scope="row">{{ $admission->city }}</td>
                                <td scope="row">{{ $admission->state }}</td>
                                <td scope="row">{{ $admission->postal }}</td>
                                <td scope="row">{{ $admission->prs_name }}</td>
                                <td scope="row">{{ $admission->relationship }}</td>
                                <td scope="row">{{ $admission->prs_email }}</td>
                                <td scope="row">{{ $admission->prs_phone }}</td> --}}

                                <td>
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
