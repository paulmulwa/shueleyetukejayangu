@extends('frontend.frontend_dashboard')
@section('main')

@section('title')
Rent Property Keja Yangu
@endsection






<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{asset('frontend/assets/images/shape/shape-9.png')}})"></div>
        <div class="pattern-2" style="background-image: url({{asset('frontend/assets/images/shape/shape-10.png')}})"></div>
    </div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Rent Property</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="route('/')">Home</a></li>
                {{-- <li>{{ $property->name }}</li> --}}
            </ul>
        </div>
    </div>
</section>
        <!--End Page Title-->


        <!-- property-page-section -->
        <section class="property-page-section property-list">
            <div class="auto-container">
                <div class="row clearfix">
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side"> --}}
                        {{-- <div class="default-sidebar property-sidebar"> --}}
                            {{-- <div class="filter-widget sidebar-widget"> --}}
                                {{-- <div class="widget-title">
                                    <h5>Property</h5>
                                </div> --}}



                                @php
                                $states = App\Models\State::latest()->get();
                                // $properties = App\Models\Properties::latest()->get()
                                $ptypes = App\Models\PropertyType::latest()->get();

                            @endphp








<form action="{{ route('rent.property.search') }}" method="post" class="search-form">
    @csrf


                                {{-- <div class="widget-content">
                                    <div class="select-box">
                                        <select name="property_status" class="wide" >
                                           <option data-display="All Type">All Status</option>
                                           <option value="buy">Buy</option>
                                           <option value="rent">Rent</option>


                                        </select>
                                    </div> --}}
                                    {{-- <div class="select-box">
                                        <select class="wide" name="ptype_id">
                                           <option data-display="Type">Select Type</option>
                                           <option value="1">New York</option>

                                           @foreach($ptypes as $type)
                                           <option value="{{ $type->type_name }}">{{ $type->type_name }}</option>
                                           @endforeach




                                        </select>
                                    </div>  --}}
                                    {{-- <div class="select-box">
                                        <select class="wide" name="state">
                                           <option data-display="state">Select State</option>
                                           @foreach($states as $state)
                                           <option value="{{ $state->state_name }}">{{ $state->state_name }}</option>
                                           @endforeach
                                        </select>
                                    </div> --}}


                                    {{-- <div class="filter-btn">
                                        <button type="submit" class="theme-btn btn-one"><i class="fas fa-filter"></i>&nbsp;Filter</button>
                                    </div>
                                </div>
                            </div>
                            <div class="price-filter sidebar-widget">
                                <div class="widget-title">
                                </div>

                            </div>


                        </div> --}}
                    {{-- </div> --}}
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
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
                                                        <div class="buy-btn pull-right"><a href="{{ url('featuredproperty/details/'.$item->id.'/.'.$item->property_slug) }}">{{ $item->property_status }}</a></div>
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
                                {{ $property->links('vendors.pagination.custom') }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </section> --}}
        </section>
        <!-- property-page-section end -->


        <!-- subscribe-section -->











        <!-- subscribe-section end -->




















@endsection

