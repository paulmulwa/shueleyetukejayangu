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

                                <h6 class="card-title" style="mb-10">Edit Services</h6>

                                <form method="POST" action="{{ route('update.services')}}"
                                class="forms-sample">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $services->id }}">




                                                                        <div class="mb-3, mt-5">
                                                                            <label for="exampleInputUsername1" class="form-label">Header</label>
                                                                            <input type="text" name="header"
                                                                            class="form-control" value="{{$services->header}}"
                                                                            placeholder="Header">
                                                                            </div>
                                                                            <div class="mb-3, mt-5">
                                                                                <label for="exampleInputUsername1" class="form-label">Text</label>
                                                                                <input type="text" name="text"
                                                                                class="form-control" value="{{$services->text}}"
                                                                                placeholder="text">
                                                                                </div>
                                                                            <div class="mb-3, mt-4">
                                                                                <label for="exampleInputUsername1" class="form-label">Icon</label>
                                                                                <input type="text" name="icon"
                                                                                class="form-control" value="{{$services->icon}}"
                                                                                 placeholder="Icon">


                                                                                </div>




                            <div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
</div>


@endsection
