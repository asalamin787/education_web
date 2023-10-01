@extends('Admin.Layouts.main')
@section('content')
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
                                <th> Id</th>
                                <th>Price</th>
                                <th>Students Name</th>
                                <th>Registration</th>
                                <th>Roll</th>
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
                                    <a href="javascript:;">{{ $admission->id }}</a>
                                </td>
                                <td>{{$admission->payments->sum('money')}}</td>
                                <td>
                                    <a class="d-flex align-items-center gap-3" href="javascript:;">
                                        <div class="customer-pic">
                                            <img src="{{ Storage::url($admission->image) }}" class="rounded-circle"
                                                width="40" height="40" alt="">
                                        </div>
                                        <p class="mb-0 customer-name fw-bold">{{ $admission->name }}
                                            {{ $admission->name }}</p>
                                    </a>
                                </td>
                                <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $admission->registration }}<i
                                            class="bi bi-check2 ms-2"></i></span></td>
                                <td><span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">{{ $admission->roll }}<i
                                            class="bi bi-x-lg ms-2"></i></span></td>
                                <td></td>
                                <td>{{ $admission->created_at }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ route('index') }}" class="btn btn-outline-primary rounded-5 btn-sm px-3">Close</a>
            </div>
        </div>
    </div>
@endsection
