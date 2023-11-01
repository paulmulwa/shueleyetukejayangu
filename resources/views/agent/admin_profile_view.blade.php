@extends('agent.agent_dashboard')
@section('agent')
<!-- partial -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

			<div class="page-content">

        <div class="row profile-body">
          <!-- left wrapper start -->
          <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
            <div class="card rounded">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-2">
                  <div>
                    <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ?
                    url('uploads/agent_images/'.$profileData->photo) : url('uploads/agent_images/no_image.jpg') }}" alt="profile">
                    <span class="h4 ms-3">{{$profileData->username}}</span>
                  </div>

                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Name</label>
                  <p class="text-muted">{{$profileData->name}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
                  <p class="text-muted">{{$profileData->email}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Phone:</label>
                  <p class="text-muted">{{$profileData->phone}}</p>
                </div>
                <div class="mt-3">
                  <label class="tx-11 fw-bolder mb-0 text-uppercase">Username:</label>
                  <p class="text-muted">{{$profileData->username}}</p>
                </div>
                <div class="mt-3 d-flex social-links">
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="github"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="twitter"></i>
                  </a>
                  <a href="javascript:;" class="btn btn-icon border btn-xs me-2">
                    <i data-feather="instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- left wrapper end -->
          <!-- middle wrapper start -->
          <div class="col-md-8 col-xl-8 middle-wrapper">
            <div class="row">
                <div class="card">
                  <div class="card-body">

                                    <h6 class="card-title">Update user details</h6>

                                    <form method="POST" action="{{route('admin.profile.store')}}" class="forms-sample" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Username</label>
                                            <input type="text" name="username" value="{{$profileData->name}}" class="form-control" id="exampleInputUsername1" autocomplete="off" placeholder="Username">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="text" name="email" value="{{$profileData->email}}" class="form-control" id="email" autocomplete="off" placeholder="Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Name</label>
                                            <input type="text" name="name" value="{{$profileData->name}}" class="form-control" id="name" autocomplete="off" placeholder="Name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone</label>
                                            <input type="text" name="phone" value="{{$profileData->phone}}" class="form-control" id="phone" autocomplete="off" placeholder="Phone">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Address</label>
                                            <input type="text" name="address" value="{{$profileData->address}}" class="form-control" id="address" autocomplete="off" placeholder="Address">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Photo</label>
                                            <input type="file" name="photo" class="form-control" id="image" >
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">
                                            </label>

                                            <img id="showImage" class="wd-80 rounded-circle" src="{{ (!empty($profileData->photo)) ?
                                                url('uploads/agent_images/'.$profileData->photo) : url('uploads/agent_images/no_image.jpg') }}" alt="profile">
                                        </div>
                                        <div class="form-check mb-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-danger me-2">Update</button>
                                    </form>

                  </div>
                </div>
                        </div>


                </div>



          </div>
          <!-- middle wrapper end -->
          <!-- right wrapper start -->

          <!-- right wrapper end -->
        </div>

			</div>

			<!-- partial:../../partials/_footer.html -->

			<!-- partial -->

		</div>
	</div>
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


@endsection
