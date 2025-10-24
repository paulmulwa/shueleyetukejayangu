@extends('frontend.frontend_dashboard')
@section('main')
    <!-- category-section -->
    @php
    $ptype = App\Models\PropertyType::latest()->get();
    //getting all the data from property type model
@endphp
<section class="category-section centred">
    <div class="auto-container">
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"  style="mt-10">
            <ul class="category-list clearfix">
@foreach($ptype as $item)
@php
    $property = App\Models\Property::where('ptype_id', $item->id)->get();
    //using the  var property we are acessing the property model and getting the ptype_id
    //check where ptype id  from property type model is similar id with the  id from the property model
    //to add all records together where ptype_id and id are same you use count
@endphp

                <li>
                    <div class="category-block-one" >
                        <div class="inner-box">
                            <div class="icon-box"><i class="{{ $item->type_icon}}"></i></div>
                            <h5><a href="{{ route('property.type', $item->id) }}">{{ $item->type_name }}</a></h5>
                            <span>{{ count($property) }}</span>
                        </div>
                    </div>
                </li>
                <li>
                    @endforeach
                    {{-- <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-2"></i></div>
                            <h5><a href="property-details.html">Commercial</a></h5>
                            <span>20</span>
                        </div>
                    </div> --}}
                {{-- </li>
                <li> --}}
            </ul>
             <div class="more-btn"><a href="{{ route('category.type') }}" class="theme-btn btn-one">All Categories</a></div>
        </div>
    </div>
</section>

    <!-- category-section end -->


    <!-- cta-section -->
    <section class="cta-section alternate-2 centred" style="background-image: url(assets/images/background/cta-1.jpg);">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text">
                    <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
                </div>
                <div class="btn-box">
                    <a href="property-details.html" class="theme-btn btn-three">Rent Properties</a>
                    <a href="index.html" class="theme-btn btn-one">Buy Properties</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <!-- feature-section -->

@php

$property = App\Models\Property::where('status', '1')->where('featured','1')->limit(6)->get();
//getting featured product where status and featured item is active

@endphp




<section class="feature-section sec-pad bg-color-1">



    <div class="auto-container">
        <div class="sec-title centred">
            <h5>Features</h5>
            <h2>Featured Property</h2>
            <p>Discover your next home with confidence, where finding the perfect rental <br />or dream property is just a click away</p>
        </div>
<div class="row clearfix">
@foreach ($property as $item )
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block mt-3">
                <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="{{asset($item->property_thumbmail)}}" alt=""></figure>
                            <div class="batch"><i class="icon-11"></i></div>
                            <span class="category">Featured</span>
                        </div>
                        <div class="lower-content">
                            <div class="author-info clearfix">
                                <div class="author pull-left">
                                    {{-- <figure class="author-thumb"><img src="{{asset('frontend/assets/images/feature/author-1.jpg')}}" alt=""></figure> --}}
                                    {{-- <h6>{{ $item->property_name }}</h6> --}}
                                    <h6>{{ $item->property_name }}</h6>

                                </div>
                                <div class="buy-btn pull-right"><a href="property-details.html">{{ $item->property_status }}</a></div>
                            </div>
                            <div class="title-text"><h4><a href="property-details.html">{{ $item->city }}</a></h4></div>
                            <div class="price-box clearfix">
                                <div class="price-info pull-left">
                                    <h6>Start From</h6>
                                    <h4>Ksh{{ $item->lowest_price }}</h4>
                                </div>
                                <ul class="other-option pull-right clearfix">
                                    <li><a aria-label="Compare" class="action-btn"
                                        id="{{$item->id}}" onclick="addToCompare(this.id)">
                                        <i class="icon-12"></i></a></li>

                                    <li><a aria-label="Add To Wishlist" class="action-btn"
                                    id="{{$item->id}}" onclick="addToWishList(this.id)">
                                        <i class="icon-13"></i></a></li>
                                </ul>
                            </div>
                            <p>{{ $item->short_descp }}</p>
                            <ul class="more-details clearfix">
                                <li><i class="icon-14"></i>{{ $item->bedrooms }}</li>
                                <li><i class="icon-15"></i>{{ $item->bathrooms }}</li>
                                <li><i class="icon-16"></i>{{ $item->property_size}} Sq Ft</li>
                            </ul>
                        {{-- </div> --}}
                            <div class="btn-box"><a href="{{ url('featuredproperty/details/'.$item->id.'/.'.$item->property_slug) }}"
                                class="theme-btn btn-two">See Details</a></div>
                        </div>
                    </div>

    </div>
        </div>
        @endforeach

        <div class="more-btn centred"><a href="{{ route('rent.property') }}" class="theme-btn btn-one">View All Listing</a></div>

    </div>
</section>

    <!-- feature-section end -->
@endsection
