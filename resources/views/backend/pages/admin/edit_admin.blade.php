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

                        <h6 class="card-title" style="mb-10">Edit Admin</h6>

                        <form id="myForm" method="POST" action="{{ route('update.admin',$user->id ) }}" class="forms-sample">
                            @csrf
                            <input type="hidden" name="id" value={{$user->id }}>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Admin Name</label>
                                <input type="text" name="name" class="form-control"
                                    autocomplete="off" placeholder="Admin Name" value="{{$user->name}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Admin Email</label>
                                <input type="text" name="email" class="form-control"
                                    autocomplete="off" placeholder="Admin Email" value="{{$user->email}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Admin Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    autocomplete="off" placeholder="Admin Phone Number" value="{{$user->phone}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Admin Address</label>
                                <input type="text" name="address" class="form-control"
                                    autocomplete="off" placeholder="Admin Address" value="{{$user->address}}">
                            </div>

                            {{-- <div class="form-group mb-3, mt-3">
                                <label for="exampleInputUsername1" class="form-label">Roles Name</label>
                                <select name="role_id" class="form-select" id="exampleInputUsername1">
                                    <option selected="" disabled="">Select Role</option>

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}" {{ $user->hasRole($role->name) ?
                                         'selected' : '' }}>{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div> --}}
                            <div class="form-group mb-3, mt-3">
                                <label for="exampleInputUsername1" class="form-label">Roles Name</label>
                                <select name="role_id" class="form-select" id="exampleInputUsername1">
                                    <option selected="" disabled="">Select Role</option>

                                    @foreach ($roles as $role)
                                        <option value="{{ $role->id }}">{{ $user->hasRole($role->name) ?
                                        'selected' : '' }}{{ $role->name }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>
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
                                                required: 'Please Enter Admin Name',
                                            },
                                            // name: {
                                            //     required: 'Please Enter Admin Name',
                                            // },
                                             email: {
                                                required: 'Please Enter Admin Email',
                                            },
                                            phone: {
                                                required: 'Please Enter Admin Phone',
                                            },
                                             address: {
                                                required: 'Please Enter Admin Address',
                                            },
                                            password: {
                                                required: 'Please Enter Admin Password',
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
