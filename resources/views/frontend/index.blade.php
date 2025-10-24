@extends('frontend.frontend_dashboard')
@section('main')

@section('title')
Keja Yangu
@endsection

<!-- banner-section end -->
@include('frontend.home.banner')


<!-- category-section -->

<!-- category-section end -->
@include('frontend.home.category')


<!-- feature-section -->
@include('frontend.home.feature')

<!-- feature-section end -->


<!-- video-section -->
@include('frontend.home.video')

<!-- video-section end -->


<!-- deals-section -->
@include('frontend.home.deals')

<!-- deals-section end -->


<!-- testimonial-section end -->
@include('frontend.home.testimonial')

<!-- testimonial-section end -->


<!-- chooseus-section -->
@include('frontend.home.chooseus')

<!-- chooseus-section end -->


<!-- place-section -->
@include('frontend.home.place')

<!-- place-section end -->


<!-- team-section -->
@include('frontend.home.team')

<!-- team-section end -->


<!-- cta-section -->
@include('frontend.home.cta')

<!-- cta-section end -->


<!-- news-section -->
@include('frontend.home.news')

<!-- news-section end -->

{{-- @include('frontend.home.download') --}}

<!-- download-section -->

@endsection
