@extends('admin.admin_dashboard')
@section('admin')
    <!-- partial -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">


        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        <div class="col-md-11 col-xl-11 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                <h6 class="card-title" style="mb-10">Update About Us</h6>

                        <form id="myForm" method="POST" action="{{ route('update.admin.aboutus') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf


                <input type="hidden" name="id" value="{{$allabt->id }}">
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">toptext</label></label>
                                <input type="text" name="toptext" class="form-control"
                                     placeholder="Enter toptext" value="{{ $allabt->toptext }}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Year</label></label>
                                <input type="text" name="year" class="form-control"
                                     placeholder="Enter Year" value="{{ $allabt->year }}">
                            </div>
                             <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Description</label></label>
                                <input type="text" name="descp" class="form-control"
                                     placeholder="Enter descp" value="{{ $allabt->descp }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Description one</label></label>
                                <input type="text" name="descp1" class="form-control"
                                     placeholder="Enter descp1" value="{{ $allabt->descp1 }}">
                            </div>  <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Description two</label></label>
                                <input type="text" name="descp2" class="form-control"
                                     placeholder="Enter descp2" value="{{ $allabt->descp2 }}">
                            </div>
                             <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Tprof</label></label>
                                <input type="text" name="tprof" class="form-control"
                                     placeholder="Enter Tprof" value="{{ $allabt->tprof}}">
                            </div>
                                                        <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">tpsell</label></label>
                                <input type="text" name="tpsell" class="form-control"
                                     placeholder="Enter tpsell" value="{{ $allabt->tpsell}}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">tprent</label></label>
                                <input type="text" name="tprent" class="form-control"
                                     placeholder="Enter tprent" value="{{ $allabt->tprent }}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label"> tcust</label></label>
                                <input type="text" name="tcust" class="form-control"
                                     placeholder="Enter  tcust" value="{{ $allabt->tcust }}">
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <input class="form-control" type="file" name="photo"  id="image" >
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1" class="form-label">
                                </label>


                                 <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($allabt->photo)) ?
                                    url('uploads/images/'.$allabt->photo) : url('uploads/images/no_image.jpg') }}" alt="profile">
                                    {{-- // url('uploads/admin_images/'.$profileData->photo) : --}}
                                    {{-- url('uploads/admin_images/no_image.jpg') }}" alt="profile

                                    "> --}}
                            </div>

                            {{-- <div class="mt-4"> --}}
                                <button type="submit" class="btn btn-primary me-2">
                                    Submit</button>
                                </form>
                                </div>
                            {{-- </div> --}}

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

