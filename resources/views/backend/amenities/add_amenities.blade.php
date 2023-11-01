@extends('admin.admin_dashboard')
@section('admin')
    <!-- partial -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">


        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title" style="mb-10">Amenities Name</h6>

                        <form id="myForm" method="POST" action="{{ route('store.amenities') }}" class="forms-sample">
                            @csrf
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Amenities Name</label>
                                <input type="text" name="amenities_name" class="form-control" id="amenities_name"
                                    autocomplete="off" placeholder="Amenities Name">

                            </div>


                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">
                                    Submit</button>
                                </form>
                            </div>
                            
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#myForm').validate({
                                        rules: {
                                            amenities_name: {
                                                required: true,
                                            },

                                        },
                                        messages: {
                                            amenities_name: {
                                                required: 'Please Enter Amenities Name',
                                            },


                                        },
                                        errorElement: 'span',
                                        errorPlacement: function(error, element) {
                                            error.addClass('invalid-feedback');
                                            element.closest('.form-group').append(error);
                                        },
                                        highlight: function(element, errorClass, validClass) {
                                            $(element).addClass('is-invalid');
                                        },
                                        unhighlight: function(element, errorClass, validClass) {
                                            $(element).removeClass('is-invalid');
                                        },
                                    });
                                });
                            </script>
                        @endsection
