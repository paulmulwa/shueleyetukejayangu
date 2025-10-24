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

                        <h6 class="card-title" style="mb-10">Edit Agent</h6>

                        <form id="myForm" method="POST" action="{{ route('update.agent') }}" class="forms-sample">
                            @csrf
                            <input type="hidden" name="id" value={{$allagent->id }}>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Agent Name</label>
                                <input type="text" name="name" class="form-control"
                                    autocomplete="off" placeholder="Agent Name" value="{{$allagent->name}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Agent Email</label>
                                <input type="text" name="email" class="form-control"
                                    autocomplete="off" placeholder="Agent Email" value="{{$allagent->email}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Agent Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    autocomplete="off" placeholder="Agent Phone Number" value="{{$allagent->phone}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Agent Address</label>
                                <input type="text" name="address" class="form-control"
                                    autocomplete="off" placeholder="Agent Address" value="{{$allagent->address}}">
                            </div>

<div class="form-group mb-3, mt-5">

                                                    <label for="exampleInputPassword1" class="form-label"> Photo</label>
                                                    <input type="file" name="image" class="form-control" id="image" >
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">
                                                    </label>

                             <img id="showImage" class="wd-80 rounded-circle"

                       src="{{ asset($allagent->image) }}" alt="profile">
                                                </div>














                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>



<script type="text/javascript">
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e)
            {
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

    });



    </script>













                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#myForm').validate({
                                        rules: {
                                            name: {
                                                required: true,
                                            },

                                            email: {
                                                required: true,
                                            },
                                            address: {
                                                required: true,
                                            },
                                            phone: {
                                                required: true,
                                            },
                                            password: {
                                                required: true,
                                            },



                                        },
                                        messages: {
                                            name: {
                                                required: 'Please Enter Agent Name',
                                            },
                                            // name: {
                                            //     required: 'Please Enter Agent Name',
                                            // },
                                             email: {
                                                required: 'Please Enter Agent Email',
                                            },
                                            phone: {
                                                required: 'Please Enter Agent Phone',
                                            },
                                             address: {
                                                required: 'Please Enter Agent Address',
                                            },
                                            password: {
                                                required: 'Please Enter Agent Password',
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
