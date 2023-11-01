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

                                <h6 class="card-title" style="mb-10">EDIT PROPERTY TYPE</h6>

                                <form method="POST" action="{{ route('update.type')}}"
                                class="forms-sample">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $types->id }}">




                                                                        <div class="mb-3, mt-5">
                                                                            <label for="exampleInputUsername1" class="form-label">Type Name</label>
                                                                            <input type="text" name="type_name"
                                                                            class="form-control @error ('type_name') is-invalid @enderror" value="{{$types->type_name}}"
                                                                            autocomplete="off" placeholder="New Password">
                                                                            @error('type_name')
                                                                            <span class="text-danger">{{message }}</span>
                                                                            @enderror
                                                                            </div>
                                                                            <div class="mb-3, mt-4">
                                                                                <label for="exampleInputUsername1" class="form-label">Type Icon</label>
                                                                                <input type="text" name="type_icon"
                                                                                class="form-control @error ('type_icon') is-invalid @enderror" value="{{$types->type_icon}}"
                                                                                autocomplete="off" placeholder="Type Icon">

                                                                                @error('type_icon')
                                                                                <span class="text-danger">{{message }}</span>
                                                                                @enderror
                                                                                </div>




                            <div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
</div>


@endsection
