@extends('admin.admin_dashboard')
@section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">



        <div class="row">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Courasel</h6>
                            <form method="post" action="{{ route('store.banner') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Banner Title</label>
                                            <input type="text" name="banner_title" class="form-control"
                                                placeholder="Enter header">
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Short Title</label>
                                                <input type="text" name="short_title" class="form-control"
                                                    placeholder="Enter short title">
                                            </div>
                                        </div>

                                    {{-- <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Banner Image</label>
                                            <input type="text" name="imagethree" class="form-control"
                                                placeholder="Enter image two">
                                        </div>
                                    </div> --}}





                                        <div class="col-sm-6">
                                            <h6 class="mb-0">Banner Image  </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="file" name="banner_image" class="form-control"  id="image"   />
                                        </div>
                                </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                             <img id="showImage" src="{{ url('upload/no_image.jpg') }}" alt="Admin" style="width:100px; height: 100px;"  >
                                        </div>
                                    {{-- </div> --}}




                                        <div class="mt-4">

                                            <button type="submit" class="btn btn-primary me-2">Submit</button>
        </div>


                    </div>
                </div>
            </div>

        </div>


    </div>







    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });


    </script>

    <script type="text/javascript">
        function icon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#icon').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>



@endsection
