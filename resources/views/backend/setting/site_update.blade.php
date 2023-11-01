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

                <h6 class="card-title" style="mb-10">Update Site setting</h6>

                        <form id="myForm" method="POST" action="{{ route('update.site.setting') }}" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                <input type="hidden" name="id" value="{{$sitesetting->id }}">
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Support Phone</label></label>
                                <input type="text" name="support_phone" class="form-control"
                                     placeholder="Enter Support Phone" value="{{ $sitesetting->support_phone }}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Company Address</label></label>
                                <input type="text" name="company_address" class="form-control"
                                     placeholder="Enter Company Address" value="{{ $sitesetting->company_address }}">
                            </div>
                             <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Email</label></label>
                                <input type="text" name="email" class="form-control"
                                     placeholder="Enter Email" value="{{ $sitesetting->email }}">
                            </div>
                             <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Facebook</label></label>
                                <input type="text" name="facebook" class="form-control"
                                     placeholder="Enter facebook Url" value="{{ $sitesetting->facebook}}">
                            </div>
                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Twitter</label></label>
                                <input type="text" name="twitter" class="form-control"
                                     placeholder="Enter Twitter Url" value="{{ $sitesetting->twitter}}">
                            </div>

                            <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Copyright</label></label>
                                <input type="text" name="copyright" class="form-control"
                                     placeholder="Enter Copyright" value="{{ $sitesetting->copyright }}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1" class="form-label">Logo</label>
                                <input class="form-control" type="file" name="logo"  id="image" >
                            </div>

                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1" class="form-label">
                                </label>

                                {{-- <img id="showImage" class="wd-80 rounded-circle"
                                 src="{{ asset($sitesetting->logo)}}" alt="profile"> --}}

                                 <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo)) ?
                                    url('uploads/logo/'.$sitesetting->logo) : url('uploads/logo/no_image.jpg') }}" alt="profile">
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

