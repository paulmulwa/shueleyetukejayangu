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

                                <h6 class="card-title" style="mb-10">Edit County</h6>

                                <form method="POST" action="{{route('update.state')}}"
                                class="forms-sample" enctype="multipart/form-data">
                                    @csrf
{{-- //////To access state table id --}}
<input type="hidden" name="id" value="{{ $state->id }}">


                                            <div class="mb-3, mt-5">
                                                <label for="exampleInputUsername1" class="form-label">County</label>
                                                <input type="text" value="{{ $state->state_name }}" name="state_name"
                                                class="form-control"
                                                 autocomplete="off" placeholder="State Name">

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label"> Property Photo</label>
                                                    <input type="file" name="state_image" class="form-control" id="image" >
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">
                                                    </label>

                            <img id="showImage" class="wd-80 rounded-circle"
                {{-- src="{{ (!empty($profileData->photo)) ? --}}
                        {{-- // url('uploads/admin_images/'.$profileData->photo)  --}}
                       src="{{ asset($state->state_image) }}" alt="profile">
                                                </div>




<div class="mt-4">


                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
</div>


@endsection
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
