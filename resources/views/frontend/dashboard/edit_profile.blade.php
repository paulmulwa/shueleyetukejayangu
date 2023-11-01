@extends('frontend.frontend_dashboard')
@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <section class="page-title centred"
        style="background-image: url({{ asset('frontend/assets/images/background/page-title-5.jpg') }})">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>User Profile </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index.html">Home</a></li>
                    <li>User Profile </li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    {{-- @include('frontend.dashboard.dashboard_sidebar') --}}


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad-2">
        <div class="auto-container">
            <div class="row clearfix">
                @php
                $id = Auth::user()->id;
                $userData = App\Models\User::find($id);
            @endphp



{{------------------------------------------------------- sideedittt ----------------------------------------------------------}}
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="blog-sidebar">
                          <div class="sidebar-widget post-widget">
                                <div class="widget-title">
                                    <h4>User Profile </h4>
                                </div>
                                <div class="post-inner">
                                    <div class="post">
                                        <figure class="post-thumb"><a href="blog-details.html">
                <img src="{{ (!empty($userData->photo)) ? url('uploads/user_images/'.$userData->photo) :
                url('uploads/user_images/no_image.jpg') }}" alt="profile">
                                        </figure>
                    <h5><a href="blog-details.html">{{ $userData->name }}</a></h5>
                     <p>{{ $userData->email }} </p>
                                    </div>
                                </div>
                            </div>

                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h4>Category</h4>
                            </div>
                            @include('frontend.dashboard.dashboard_sidebar')

                        </div>

                    </div>
                </div>




                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-details-content">
                        <div class="news-block-one">
                            <div class="inner-box">

                                <div class="lower-content">
                                    <h3>Update Admin Profile.</h3>

                                    <form action="{{ route('user.profile.store') }}" method="POST"
                                    enctype="multipart/form-data" class="default-form">
                                    @csrf
                                        {{-- <div class="form-group">
                                            <label>User name</label>
                                            <input type="text" name="name" value="{{ $userData->username }}">
                                        </div> --}}
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{ $userData->name }}" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name="email" value="{{ $userData->email }}" required="">
                                        </div>
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ $userData->phone }}" required="">
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="address" value="{{ $userData->address }}" required="">
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <input type="text" name="address" value="{{ $userData->agent_descp }}" required="">
                                        </div>

                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Photo
                                            </label>
                                            <input class="form-control" name="photo" type="file" id="image">
                                        </div>
                                            <img id="showImage" class="wd-80 rounded-circle"
                                            src="{{ (!empty($profileData->photo)) ?
                                                url('uploads/admin_images/'.$profileData->photo) : url('uploads/admin_images/no_image.jpg') }}" alt="profile">
                                        {{-- </div> --}}

                                        <div class="form-group message-btn">
                                            <button type="submit" class="theme-btn btn-one">Save Changes </button>
                                        </div>
                                    </form>



                                </div>
                            </div>
                        </div>


                    </div>


                </div>


            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->

    <!-- subscribe-section -->
    <section class="subscribe-section bg-color-3">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                    <div class="text">
                        <span>Subscribe</span>
                        <h2>Sign Up To Our Newsletter To Get The Latest News And Offers.</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                    <div class="form-inner">
                        <form action="contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Enter your email" required="">
                                <button type="submit">Subscribe Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe-section end -->

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
