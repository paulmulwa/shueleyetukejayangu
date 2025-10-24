


@php
    $states = App\Models\State::latest()->get();
    // $properties = App\Models\Properties::latest()->get()
    $ptypes = App\Models\PropertyType::latest()->get();
    $banner= App\Models\Banner::latest()->get();

@endphp

<!-- banner-style-two -->

<section class="banner-style-two centred">

    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        @foreach ($banner as $bn )
        <div class="slide-item">

         <div class="image-layer" style="background-image:url({{asset($bn->banner_image)}});"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h2>{{ $bn->banner_title }}</h2>
                    <p>{{ $bn->short_title }}</p>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</section>

<!-- banner-style-two end -->


<!-- search-field-section -->
<!-- search-field-section end -->
