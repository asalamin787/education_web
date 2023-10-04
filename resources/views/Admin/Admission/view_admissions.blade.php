@extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-body">
            <a href="{{ route('add_admission') }}" class="btn btn-primary mb-3">+ Add new</a>
            <div class="customer-table">
                <div class="table-responsive white-space-nowrap">
                    <table class="table align-middle">
                        <thead class="table-light">
                            <tr class="text-center">
                                <th>
                                    <input class="form-check-input" type="checkbox">
                                </th>
                                <th> Id</th>
                                <th>Payments</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>Registration</th>
                                <th>Course</th>
                                <th>Gender</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admissions as $admission)
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <a href="javascript:;">{{ $admission->id }}</a>
                                    </td>
                                    <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ number_format($admission->payments->sum('money')) }}/=<i
                                            class="bi bi-check2 ms-2"></i></span></td>
                                    <td>
                                        <a class="d-flex align-items-center gap-3" href="javascript:;">
                                            <div class="customer-pic">
                                                <img src="{{ Storage::url($admission->image) }}" class="rounded-circle"
                                                    width="40" height="40" alt="">
                                            </div>
                                            <p class="mb-0 customer-name fw-bold">{{ $admission->name }}
                                                {{ $admission->l_name }}</p>
                                        </a>
                                    </td>
                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $admission->roll }}<i
                                                class="bi bi-check2 ms-2"></i></span></td>
                                    <td><span
                                            class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $admission->registration }}<i
                                                class="bi bi-x-lg ms-2"></i></span></td>
                                    <td>{{ $admission->course ? $admission->course->course_name : '' }}</td>
                                    <td>{{ $admission->gender }}</td>
                                    <td>{{ $admission->email }}</td>
                                    <td>
                                        <a href="{{ route('student_profile_view', $admission) }}"
                                            class="btn btn-sm btn-success">View</a>
                                        <a href="{{ route('add_payment', $admission) }}"
                                            class="btn btn-sm btn-warning">Payment</a>
                                        <a href="{{ route('edit_admission', $admission) }}"
                                            class="btn btn-sm btn-primary">Edit</a>
                                        <a href="{{ route('delete_admission', $admission) }}"
                                            class="btn btn-sm btn-danger"><i class="la la-trash-o"></i>Delete</a>

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
