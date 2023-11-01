@extends('frontend.frontend_dashboard')
@section('main')







<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url(assets/images/shape/shape-9.png);"></div>
        <div class="pattern-2" style="background-image: url(assets/images/shape/shape-10.png);"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>{{ $pbread->type_name }}</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="route('/')">Home</a></li>
                <li>{{ $pbread->type_name }}</li>
            </ul>
        </div>
    </div>
</section>
        <!--End Page Title-->


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                        <div class="default-sidebar property-sidebar">
                            <div class="filter-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Property</h5>
                                </div>
                                <div class="widget-content">
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Type">All Type</option>
                                           <option value="1">Villa</option>
                                           <option value="2">Commercial</option>
                                           <option value="3">Residential</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Select Location">Select Location</option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="This Area Only">This Area Only</option>
                                           <option value="1">New York</option>
                                           <option value="2">California</option>
                                           <option value="3">London</option>
                                           <option value="4">Maxico</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Type">Max Rooms</option>
                                           <option value="1">2+ Rooms</option>
                                           <option value="2">3+ Rooms</option>
                                           <option value="3">4+ Rooms</option>
                                           <option value="4">5+ Rooms</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="Most Popular">Most Popular</option>
                                           <option value="1">Villa</option>
                                           <option value="2">Commercial</option>
                                           <option value="3">Residential</option>
                                        </select>
                                    </div>
                                    <div class="select-box">
                                        <select class="wide">
                                           <option data-display="All Type">Select Floor</option>
                                           <option value="1">2x Floor</option>
                                           <option value="2">3x Floor</option>
                                           <option value="3">4x Floor</option>
                                        </select>
                                    </div>
                                    <div class="filter-btn">
                                        <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                    <h5>Select Price Range</h5>
                                </div>
                                <div class="range-slider clearfix">
                                    <div class="clearfix">
                                        <div class="input">
                                            <input type="text" class="property-amount" name="field-name" readonly="">
                                        </div>
                                    </div>
                                    <div class="price-range-slider"></div>
                                </div>
                            </div>
                            {{-- <div class="category-widget sidebar-widget">
                                <div class="widget-title">
                                    <h5>Status Of Property</h5>
                                </div>
                                <ul class="category-list clearfix">
                                    <ul class="category-list clearfix">
                                        {{-- @$size = count((array)$_POST['adm_num'])); --}}
                                        {{-- @$rentproperty = count((array)$_POST['rentproperty'])); --}}

                                        {{-- <li><a href="{{ route('rent.property') }}">For Rent <span>{{ count($rentproperty) }}</span></a></li> --}}

                                        {{-- <li><a href="{{ route('rent.property') }}">For Rent <span>{{ count($rentproperty) }}</span></a></li> --}}
                                        {{-- <li><a href="">For Buy <span>67</span></a></li> --}}
                                        {{-- if (is_countable($rentproperty) && count($rentproperty) > 0) : --}}
                                        {{-- <li><a href="{{ route('rent.property') }}">For Rent <span>({{ count($rentproperty) }})</span></a></li> --}}
                                    {{-- <li><a href="{{ route('buy.property') }}">For Buy <span>({{ count($buyproperty) }})</span></a></li> --}}
                                    {{-- </ul>
                            </div> --}}

                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                        <div class="property-content-side">
                            <div class="item-shorting clearfix">
                                <div class="left-column pull-left">
                                    <h5>Search Reasults: <span>Showing {{ count($property) }} Listings</span></h5>
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
{{-- ////////////////////////////////////////////////////////////NEWEWWWW//////////////////////////////////// --}}
@foreach($property as $item)
                                            <div class="deals-block-one">
                                                <div class="inner-box">
                                                    <div class="image-box">
                                                        <figure class="image">
                                                            {{-- <a href="blog-details.html"> --}}
                                                            <img src="{{asset($item->property_thumbmail)}}"
                                                            {{-- url('uploads/agent_images/'.$item->photo) : --}}
                                                            {{-- {{-- // url('uploads/user_images/no_image.jpg')
                                                        }} --}}

                                                            alt="image" style="width:300px; height:350px;">
                                                                                    </figure>
                                                        <div class="batch"><i class="icon-11"></i></div>

                                                        @if($item->featured == 1)
                                                        <span class="category">Featured</span>
                                                        @else
                                                        <span class="category">New</span></span>

                                                        @endif
                                                        {{-- <span class="category">Featured</span> --}}
                                                        <div class="buy-btn pull-right"><a href="property-details.html">{{ $item->property_status }}</a></div>
                                                    </div>
                                                    <div class="lower-content">
                                                        <div class="title-text"><h4>
                                    {{-- <a href="{{ url('featuredproperty/details/'.$item->id.'/.'.$item->property_slug) }}"
                                                            class="theme-btn btn-two">See Details --}}
                                                            {{ $item->property_name }}
                                                        {{-- </a></h4></div> --}}
                                                        <div class="price-box clearfix">
                                                            <div class="price-info pull-left">
                                                                <h6>Start From</h6>
                                                                <h4>Ksh {{ $item->lowest_price }}</h4>
                                                            </div>
                                                            @if($item->agent_id == Null)
                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="{{ url('assets/images/feature/author-1.jpg') }}"alt="">
                                                                    <span>Admin</span>
                                                                </figure>
                                                            </div>
                                                            @else

                                                            <div class="author-box pull-right">
                                                                <figure class="author-thumb">
                                                                    <img src="{{ (!empty($item->user->photo)) ?
                                                                        url('uploads/agent_images/'.$item->user->photo) : url('uploads/agent_images/no_image.jpg') }}" alt="profile">                                                                    <span>{{ $item->name }}</span>
<span>{{ $item->user->name }}</span>


{{--
                                                                    <div>
                                                                        <img class="wd-100 rounded-circle" src="{{ (!empty($profileData->photo)) ?
                                                                        url('uploads/agent_images/'.$profileData->photo) : url('uploads/agent_images/no_image.jpg') }}" alt="profile">
                                                                        <span class="h4 ms-3">{{$profileData->username}}</span>
                                                                      </div> --}}







                                                                </figure>
                                                            </div>

                                                            @endif
                                                        </div>
                                                        <p>{{$item->short_descp }}</p>
                                                        <ul class="more-details clearfix">
                                                            <li><i class="icon-14"></i>{{ $item->bedrooms }} Beds</li>
                                                            <li><i class="icon-15"></i>{{ $item->bathrooms }} Bathrooms</li>
                                                            <li><i class="icon-16"></i>{{ $item->property_size }} Size Sq Ft</li>
                                                        </ul>
                                                        <div class="other-info-box clearfix">
                                                            {{-- <div class="btn-box pull-left"><a href="{{ url('featuredproperty/details/'.$item->id.'/.'.$item->property_slug) }}"
                                                                class="theme-btn btn-two">See Details</">
                                                                {{ $item->property_name }}</a></h4></div> --}}


                                                                <div class="btn-box"><a href="{{ url('featuredproperty/details/'.$item->id.'/.'.$item->property_slug) }}"
                                                                    class="theme-btn btn-two">See Details</a></div>
                                                            </div>








                                                            {{-- <ul class="other-option pull-right clearfix"> --}}
                                                                <ul class="other-option pull-right clearfix">
                                                                    <li><a aria-label="Compare" class="action-btn"
                                                                        id="{{$item->id}}" onclick="addToCompare(this.id)">
                                                                        <i class="icon-12"></i></a></li>

                                                                    <li><a aria-label="Add To Wishlist" class="action-btn"
                                                                    id="{{$item->id}}" onclick="addToWishList(this.id)">
                                                                        <i class="icon-13"></i></a></li>
                                                                </ul>
                                                            {{-- </ul> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
@endforeach

                                        </div>
{{-- ////////////////endnew//// --}}


                            <div class="pagination-wrapper">
                                <ul class="pagination clearfix">
                                    <li><a href="property-list.html" class="current">1</a></li>
                                    <li><a href="property-list.html">2</a></li>
                                    <li><a href="property-list.html">3</a></li>
                                    <li><a href="property-list.html"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- property-page-section end -->


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




















@endsection

