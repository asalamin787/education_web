@extends('Admin.Layouts.main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">View all student payments </h4>
            {{-- <a href="{{route('add_payment')}}" class="btn btn-primary">+ Add new</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Admission Id</th>
                            <th scope="col">Money</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td scope="row">{{ $payment->id }}</td>
                                <td scope="row">{{ $payment->admission_id }}</td>
                                <td scope="row">{{ $payment->money }}</td>

                                <td>
                                    <a href="{{route('edit_payment', $payment)}}" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="{{route('delete_payment', $payment)}}" class="btn btn-sm btn-danger"><i class="la la-trash-o"></i>Delete</a>

                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
