@extends('frontend.frontend_dashboard')
@section('main')

@php
$allagent = App\Models\User::where('role', 'agent')->get();
@endphp




 <!--Page Title-->
 <section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('frontend/assets/images/shape/shape-9.png')}})"></div>
        <div class="pattern-2" style="background-image: url({{asset('frontend/assets/images/shape/shape-10.png')}})"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Agents</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Agents</li>
            </ul>
        </div>
    </div>
</section>
</section>
<!--End Page Title-->


<!-- agents-page-section -->
<section class="agents-page-section agents-list">
    <div class="auto-container">
        {{-- <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                {{-- <div class="default-sidebar agent-sidebar"> --}}
                    <div class="agents-search sidebar-widget">
                        <div class="widget-title">
                        </div>


                                @php
                                    $city= App\Models\State::get();
                                    $ptype = App\Models\PropertyType::get();
                                @endphp

            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="agents-content-side">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h5>Find <span>Agents</span></h5>
                        </div>
                        <div class="right-column pull-right clearfix">

                            <div class="short-menu clearfix">
                                <button class="list-view on"><i class="icon-35"></i></button>
                                <button class="grid-view"><i class="icon-36"></i></button>
                            </div>
                        </div>
                    </div>
                    @foreach ($allagent as  $agent)

                    <div class="wrapper list">
                        <div class="agents-list-content list-item">
                            <div class="agents-block-one">
                                <div class="inner-box">
                                    <figure class="image-box">


                                    <img src="{{ (!empty($agent->photo)) ?
                                        url('uploads/agent_images/'.$agent->photo) :
                                        url('uploads/agent_images/no_image.jpg') }}" alt="profile" alt="image" style="width:280px; height:350px;">


                                    </figure>
                                        <img src="{{asset($agent->photo)}}">
                                    <div class="content-box">
                                        <div class="upper clearfix">
                                            <div class="title-inner pull-left">
                                                <h4><a href="agents-details.html">{{ $agent->name }}</a></h4>
                                                <span class="designation">{{ $agent->name }}</span>
                                            </div>
                                            <ul class="social-list pull-right clearfix">
                                                <li><a href="agents-list.html"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="agents-list.html"><i class="fab fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="text">
                                            <p>{{ $agent->short_descp }}</p>
                                        </div>
                                        <ul class="info clearfix">
                                            <li><i class="fab fa fa-envelope"></i><a href="paulmulwa101@gmail.com">{{ $agent->email }}</a></li>
                                            <li><i class="fab fa fa-phone"></i><a href="tel:0705069145">{{ $agent->phone }}</a></li>
                                        </ul>
                                        {{-- <div class="btn-box">
                                            <a href="agents-details.html" class="theme-btn btn-two">View Profile</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach

                    {{-- <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <li><a href="agents-list.html" class="current">1</a></li>
                            <li><a href="agents-list.html">2</a></li>
                            <li><a href="agents-list.html">3</a></li>
                            <li><a href="agents-list.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- agents-page-section end -->


<!-- subscribe-section -->
{{-- <section class="subscribe-section bg-color-3">
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
                    <form action="{{ route('subscribe.suscribe') }}" method="post" class="subscribe-form">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Enter your email" required="">
                            <button type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- subscribe-section end -->

@endsection
