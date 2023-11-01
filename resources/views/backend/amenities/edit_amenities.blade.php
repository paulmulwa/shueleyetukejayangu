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

                                <h6 class="card-title" style="mb-10">Edit Ammenities</h6>

                                <form method="POST" action="{{route('update.amenities')}}"
                                class="forms-sample">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $amenities->id }}">




                                                                        <div class="mb-3, mt-5">
                                                                            <label for="exampleInputUsername1" class="form-label">Amenities Name</label>
                                                                            <input type="text" name="amenities_name"
                                                                            class="form-control @error ('amenities_name') is-invalid @enderror" value="{{$amenities->amenities_name}}"
                                                                            autocomplete="off" placeholder="Amenities">

                                                                            </div>




                            <div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
</div>


@endsection
