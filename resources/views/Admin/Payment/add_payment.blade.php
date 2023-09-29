@extends('Admin.Layouts.main')
@section('content')
    <div class="container overflow-hidden mb-4">

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
        <div class="mb-3">
            <h1 class="fw-normal">Payment Form</h1>
            <p class="text-secondary">Enter your Payment information below</p>
        </div>
        <form action="{{ route('payment_store',$admission) }}" method="post" enctype="multipart/form-data">
            @csrf

           
            {{-- <div class="row mb-3">
                <div class="col-12">
                    <div class="form-group">

                        <label class="pt-2" for="admiddion_id">Admission Id</label>
                        <input type="number" name="admission_id" id="admiddion_id" class="form-control" placeholder="Admission Id">
                        
                    </div>
                </div>
            </div> --}}
             {{-- <input type="hidden" name="admission" value="{{$admission->id}}"> --}}

            <div class="row">
                <div class="col-12">
                    <label class="form-label" for="form2">Money</label>
                    <input id="postfix4" value="" type="text" class="form-control" placeholder="Optional"
                        name="money" />
                    <p id="error-message4" style="color: red;"></p>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('view_payments') }}" class="btn btn-light">Cencel</a>
            </div>


        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        //student Id //

        $(document).ready(function() {
            // Attach an input event handler to the element with id "postfix"
            $('#postfix4').on('input', function() {
                // Get the current value of the input field
                var inputValue = $(this).val();
                var numericValue = inputValue.replace(/[^0-9]/g, '');

                // Update the input value with the numeric-only value
                $(this).val(numericValue);

                // Check if the length of the input exceeds 5 characters
                if (numericValue.length > 10) {
                    // Truncate the input to 5 characters
                    $(this).val(numericValue.slice(0, 10));

                    // Display an error message
                    $('#error-message4').text('Maximum 10 digits allowed.');
                } else {
                    // Clear the error message if the input is within the limit
                    $('#error-message4').text('');
                }
            });
        });

        //student Id end //
    </script>
@endsection
