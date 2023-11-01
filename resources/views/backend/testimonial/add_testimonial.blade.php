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

                                <h6 class="card-title" style="mb-10">Add  Testimonial</h6>

                                <form method="POST" action="{{route('store.testimonials')}}"
                                class="forms-sample" enctype="multipart/form-data">
                                    @csrf


                                            <div class="mb-3, mt-5">
                                                <label for="exampleInputUsername1" class="form-label">Name</label>
                                                <input type="text" name="name"
                                                class="form-control"
                                                  placeholder="name">

                                                </div>
                                                <div class="mb-3, mt-5">
                                                <label for="exampleInputUsername1" class="form-label">Position</label>
                                                <input type="text" name="position"
                                                class="form-control"
                                                placeholder="position">

                                                </div>
                                                <div class="mb-3, mt-5">
                                                    <label for="exampleInputUsername1" class="form-label">Message</label>
                                                    
                                                    <textarea name="message" class="form-control" 
                                                    id="exampleFormControlTextarea1" rows="4"  placeholder="message">

                                                    </textarea>
{{--                                                     
                                               
                                                    
                                                    <input type="text" name="message"
                                                    class="form-control"
                                                  >
     --}}
                                                    </div>
                                                    <br><br>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">Testimonial Photo</label>
                                                    <input type="file" name="image" class="form-control" id="image" >
                                                </div>

                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1" class="form-label">
                                                    </label>

                            <img id="showImage" class="wd-80 rounded-circle"
                {{-- src="{{ (!empty($profileData->photo)) ? --}}
                        {{-- // url('uploads/admin_images/'.$profileData->photo)  --}}
                       src="url('uploads/state/no_image.jpg')" alt="profile">
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
