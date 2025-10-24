@php
    $abt= App\Models\AboutUs::find(1);
    ///finding data with id number 1 from the table
@endphp
@php
    $serv= App\Models\Services::limit(6)->get();
    // $property = App\Models\Property::where('status', '1')->where('featured','1')->limit(6)->get();

    ///finding data with id number 1 from the table
@endphp

@php
    $agent= App\Models\User::where('role', 'agent')->limit(3)->get();
    // $property = App\Models\Property::where('status', '1')->where('featured','1')->limit(6)->get();

    ///finding data with id number 1 from the table
@endphp











<!--Page Title-->
 @extends('frontend.frontend_dashboard')
 @section('main')
 <section class="page-title centred" style="background-image:url({{asset('frontend/assets/images/background/kj5.png')}});">

    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- about-section -->
<section class="about-section about-page pb-0">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_2">
                        <div class="image-box">
                            {{-- <figure class="image">
                                <img src={{ asset('assets/images/resource/about-1.jpg') }}alt=""></figure> --}}
                                <figure class="image">
                                    <img src="{{ asset($abt->photo) }}"alt=""></figure>
                            <div class="text wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <h2>{{ $abt->year }}</h2>
                                <h4>Years of <br />Experience</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_3">
                        <div class="content-box">
                            <div class="sec-title">
                                <h5>About</h5>
                                <h2>{{ $abt->toptext }}</h2>
                            </div>
                            <div class="text">
                                <p>{{ $abt->descp }}</p>
                                <p>{{ $abt->descp1 }}</p>
                            </div>
                            <ul class="list clearfix">
                                <li>{{ $abt->descp2 }}</li>
                                {{-- <li>{{ $abt->descp3 }}</li> --}}
                            </ul>
                            <div class="btn-box">
                                <a href="{{ url('contactus/contactus') }}" class="theme-btn btn-one">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- feature-style-three -->
<section class="feature-style-three centred pb-110">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Services</h5>
            <h2>Property Services</h2>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
            @foreach($serv as $item)
            <div class="feature-block-two">
                <div class="inner-box">
                    <div class="icon-box"><i class="{{$item->icon }}"></i></div>
                    <h4>{{ $item->header }}</h4>
                    <p>{{ $item->text }}</p>
                </div>
            </div>
@endforeach



        </div>
    </div>
</section>
<!-- feature-style-three end -->
                                                                            {{-- ({{asset('frontend/assets/images/background/page-title-5.jpg')}}) --}}

<!-- cta-section -->
<section class="cta-section alternate-2 pb-240 centred" style="background-image: url({{asset('frontend/assets/images/background/b2.png')}});">

    <div class="auto-container">
        <div class="inner-box clearfix">
            <div class="text">
                <h2>Looking to Buy a New Property or <br />Sell an Existing One?</h2>
            </div>
            <div class="btn-box">
                <a href="{{route('rent.property')}}" class="theme-btn btn-three">Rent Properties</a>
                <a href="{{route('buy.property')}}"class="theme-btn btn-one">Buy Properties</a>
            </div>
        </div>
    </div>
</section>
<!-- cta-section end -->


<!-- funfact-section -->
<section class="funfact-section centred">
    <div class="auto-container">
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="{{ $abt->tprof }}">0</span>
                            </div>
                            <p>Total Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="{{ $abt->tpsell }}">0</span>
                            </div>
                            <p>Total Property Sell</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="{{ $abt->tprent }}">0</span>
                            </div>
                            <p>Total Property Rent</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 funfact-block">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="{{ $abt->tcust }}">0</span>
                            </div>
                            <p>Total Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- funfact-section end -->

@php
    $testimonials = App\Models\Testimonial::latest()->get();
@endphp

<!-- testimonial-style-four -->
<section class="testimonial-style-four sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Testimonials</h5>
            <h2>What They Say About Us</h2>
            <p>Keja Yangu has been a game-changer for us. Their personalized service, attention to detail, and expert guidance throughout the entire real estate process have been invaluable. <br />We couldn't be happier with the results</p>
        </div>
        <div class="three-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
@foreach($testimonials as $item)
            <div class="testimonial-block-three">
                <div class="inner-box">
                    <div class="icon-box"><i class="icon-18"></i></div>
                    <h4>“{{ $item->message }}”</h4>
                    <h5>{{ $item->name}}</h5>
                    <span class="designation">{{ $item->position}}</span>
                </div>
            </div>
@endforeach

        </div>
    </div>
</section>
<!-- testimonial-style-four end -->


<!-- clients-section -->
<section class="clients-section bg-color-1">
                                                {{-- ({{asset('frontend/assets/images/background/page-title-5.jpg')}}) --}}

{{-- <div class="pattern-layer" style="background-image:url({{asset('frontend/assets/images/shape/shape-1.png')}})"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                <div class="sec-title">
                    <h5>Our Partners</h5>
                    <h2>We’re going to Became Partners for the Long Run.</h2>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 inner-column">
                <div class="clients-logo">
                    <ul class="logo-list clearfix">
                        <li>
                            <figure class="logo"><img src="{{asset('frontend/assets/images/clients/c3.jpg')}}" alt=""></a></figure>
                        <p></p>
                        </li>
                        <li>
                            <figure class="logo"><img src="{{asset('frontend/assets/images/clients/c4.jpg')}}" alt=""></a></figure>
                        </li>
                        <li>
                        </li>

                        <li>
                            <figure class="logo"><img src="{{asset('frontend/assets/images/clients/c2.png')}}" alt=""></a></figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- clients-section end -->


<section class="contact-info-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Clients</h5>
            <h2>Companies We have worked with</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
         <figure class="logo"><img src="{{asset('frontend/assets/images/clients/c3.jpg')}}" alt=""></a></figure>
<p>South Eastern Kenya University</p>
                    </div>
                </div>
            </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                            <figure class="logo"><img src="{{asset('frontend/assets/images/clients/c4.jpg')}}" alt=""></a></figure>
<p>Starehe Boys Center</p>

                    </div>
                </div>
            </div>
                 <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                            <figure class="logo"><img src="{{asset('frontend/assets/images/clients/c2.png')}}" alt=""></a></figure>
<p>Kitui Press</p>

                    </div>
                </div>
            </div>







        </div>
    </div>
</section>
















<!-- team-section -->
<section class="team-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Our Agents</h5>
            <h2>Meet Our Excellent Agents</h2>
        </div>
        <div class="row clearfix">
            @foreach ( $agent as $item)

            <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">

                    <div class="inner-box">
                        {{-- <figure class="image-box"><img src="{{ $item->photo }}" alt=""></figure> --}}



                        <figure class="image-box" ><a href="{{ route('agent.details', $item->id) }}"></a>

                            {{-- <a href="blog-details.html"> --}}
                            <img src="{{ (!empty($item->photo)) ?
                            url('uploads/agent_images/'.$item->photo) :
                            url('uploads/user_images/no_image.jpg') }}" alt="image" style="width:370px; height:370px;">
                                                    </figure>






                        {{-- url({{asset('frontend/assets/images/shape/shape-9.png')}})" --}}
                        <div class="lower-content">

                            <div class="inner">
                                <h4><a href="{{ route('agent.details', $item->id) }}">{{ $item->name }}</a></h4>
                                <span class="designation">{{ $item->phone }}</span>
                                {{-- <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul> --}}
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            @endforeach

        </div>
    </div>
</section>
<!-- team-section end -->


<!-- download-section -->
{{-- <section class="download-section bg-color-3">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-3.png);"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image image-1 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="assets/images/resource/download-1.png" alt=""></figure>
                    <figure class="image image-2 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms"><img src="assets/images/resource/download-2.png" alt=""></figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content_block_1">
                    <div class="content-box">
                        <span>Download</span>
                        <h2>Download Our Android and IOS App for Experience</h2>
                        <div class="download-btn">
                            <a href="index.html" class="app-store">
                                <i class="fab fa-apple"></i>
                                <p>Download on</p>
                                <h4>App Store</h4>
                            </a>
                            <a href="index.html" class="google-play">
                                <i class="fab fa-google-play"></i>
                                <p>Get It On</p>
                                <h4>Google Play</h4>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- download-section end -->
@endsection
