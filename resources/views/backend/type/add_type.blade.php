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

                                <h6 class="card-title" style="mb-10">Add Type</h6>

                                <form method="POST" action="{{route('store.type')}}"
                                class="forms-sample" enctype="multipart/form-data">
                                    @csrf




                                            <div class="mb-3, mt-5">
                                                <label for="exampleInputUsername1" class="form-label">Type Name</label>
                                                <input type="text" name="type_name"
                                                class="form-control @error ('type_name') is-invalid @enderror" id="type_name"
                                                  placeholder="Type Name">
                                                 @error('type_name')
                                                 <span class="text-danger">{{message }}</span>
                                                 @enderror
                                                </div>
                                                <div class="mb-3, mt-4">
                                                    <label for="exampleInputUsername1" class="form-label">Type Icon</label>
                                                    <input type="text" name="type_icon"
                                                    class="form-control @error ('type_icon') is-invalid @enderror" id="type_icon"
                                                      placeholder="Type Icon">
                                                     @error('type_icon')
                                                     <span class="text-danger">{{message }}</span>
                                                     @enderror
                                                    </div>




<div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
</div>


@endsection
