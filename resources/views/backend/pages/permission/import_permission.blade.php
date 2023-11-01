@extends('admin.admin_dashboard')
@section('admin')
    <!-- partial -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">


        <a href="{{route('export')}}"class= "btn btn-inverse-danger">Export Excel sheet</a>


            </ol>
        </nav>


        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title" style="mb-10">Import Permisssion</h6>

                        <form id="myForm" method="POST" action="{{ route('import') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Excel File Import</label>
                                <input type="file" name="import_file" class="form-control"

                       autocomplete="off" placeholder="Permission Name">
                            </div>


                            <div class="mt-4">
                                <button type="submit" class="btn btn-inverse-warning">Upload</button>
                            </div>


                        @endsection
