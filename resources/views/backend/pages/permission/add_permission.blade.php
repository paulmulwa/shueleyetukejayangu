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

                        <h6 class="card-title" style="mb-10">Add Permisssion</h6>

                        <form id="myForm" method="POST" action="{{ route('store.permission') }}" class="forms-sample">
                            @csrf
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Permission Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    autocomplete="off" placeholder="Permission Name">
                            </div>
                            <div class="form-group mb-3, mt-3">
                                <label for="exampleInputUsername1" class="form-label">Group Name</label>
                                    <select name="group_name" class="form-select" id="exampleInputUsername1">
                                        <option selected="" disabled="">Select Group</option>
                                        <option value="type">Property Type</option>
                                        <option value="state">State</option>
                                        <option value="amenities">Amenities</option>
                                        <option value="property">Property</option>
                                        <option value="history">Package History</option>
                                        <option value="message">Property Message</option>
                                        <option value="testimonials">Testimonials</option>
                                        <option value="agent">Manage Agent</option>
                                        <option value="category">Blog Category</option>
                                        <option value="post">Blog Post</option>
                                        <option value="smtp">SMTP Setting</option>
                                        <option value="site">Site Setting</option>
                                        <option value="state">State</option>
                                        <option value="role">Role & Permission</option>

                                    </select>

                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>

                            {{-- <script type="text/javascript">
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
                            </script> --}}
                        @endsection
