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

                        <h6 class="card-title" style="mb-10">Add Roles</h6>

                        <form id="myForm" method="POST" action="{{ route('store.roles') }}" class="forms-sample">
                            @csrf
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Role Name</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Role Name">
                            </div>



                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div>


                        @endsection
