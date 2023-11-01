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

                <h6 class="card-title" style="mb-10">Update Smtp Setting</h6>

                        <form id="myForm" method="POST" action="{{ route('update.smtp.setting') }}" class="forms-sample">
                            @csrf
                <input type="hidden" name="id" value="{{$setting->id }}">
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Mailer</label></label>
                                <input type="text" name="mailer" class="form-control"
                                     placeholder="Mailer" value="{{ $setting->mailer }}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Host</label></label>
                                <input type="text" name="host" class="form-control"
                                     placeholder="Host" value="{{ $setting->host }}">
                            </div>
                             <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Port</label></label>
                                <input type="text" name="post" class="form-control"
                                     placeholder="Post" value="{{ $setting->post }}">
                            </div>
                             <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Username</label></label>
                                <input type="text" name="username" class="form-control"
                                     placeholder="User Name" value="{{ $setting->username }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Password</label></label>
                                <input type="text" name="password" class="form-control"
                                     placeholder="Password" value="{{ $setting->password}}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Encryption</label></label>
                                <input type="text" name="encryption" class="form-control"
                                     placeholder="Encryption" value="{{ $setting->encryption }}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">From Address</label></label>
                                <input type="text" name="from_address" class="form-control"
                                     placeholder="from_address" value="{{ $setting->from_address }}">
                            </div>

























                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">
                                    Submit</button>
                                </form>
                            </div>

                        @endsection
