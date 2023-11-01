@extends('frontend.frontend_dashboard')
@section('main')

    <!--Page Title-->
    <section class="page-title-two bg-color-1 centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
        </div>
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>WishList</h1>
                <ul class="bread-crumb clearfix">
                    {{-- <li><a href="{{ route('/') }}">Home</a></li> --}}
                    <li>WishList</li>
                </ul>
            </div>
        </div>
    </section>

 <!-- property-page-section -->
 <section class="property-page-section property-list">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                <div class="default-sidebar property-sidebar">
                    <div class="filter-widget sidebar-widget">
                        <div class="widget-title">
                            {{-- <h5>Property</h5> --}}

                    {{-- </div> --}}




                    @php
                    $id = Auth::user()->id;
                    $userData = App\Models\User::find($id);
                @endphp

                    <!---------------------------newone--------------!---->
                        {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side"> --}}
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
                            </div>
                        </div>
                    </div>

                    <!-------------------------------endone----------------!--->

                    <div class="category-widget sidebar-widget">
                        <div class="widget-title">
                            <h5>Wishlist</h5>
                        </div>
@include('frontend.dashboard.dashboard_sidebar')
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                <div class="property-content-side">
                    <div class="item-shorting clearfix">
                        <div class="left-column pull-left">
                            <h5>Search Reasults: <span>Showing 1-5 of 20 Listings</span></h5>
                        </div>
                        <div class="right-column pull-right clearfix">
                            <div class="short-box clearfix">
                                <div class="select-box">
                                    <select class="wide">
                                       <option data-display="Sort by: Newest">Sort by: Newest</option>
                                       <option value="1">New Arrival</option>
                                       <option value="2">Top Rated</option>
                                       <option value="3">Offer Place</option>
                                       <option value="4">Most Place</option>
                                    </select>
                                </div>
                            </div>
                            <div class="short-menu clearfix">
                                <button class="list-view on"><i class="icon-35"></i></button>
                                <button class="grid-view"><i class="icon-36"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="wrapper list">
                        <div class="deals-list-content list-item">

<div id="wishlist">

</div>



                        </div>

                    </div>
                    {{-- <div class="pagination-wrapper">
                        <ul class="pagination clearfix">
                            <li><a href="property-list.html" class="current">1</a></li>
                            <li><a href="property-list.html">2</a></li>
                            <li><a href="property-list.html">3</a></li>
                            <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- property-page-section end -->


<!-- subscribe-section -->
<section class="subscribe-section bg-color-3">
    <div class="pattern-layer" style="background-image: url({{ asset('/assets/frontend/images/shape/shape-2.png') }}"></div>
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










@endsection
