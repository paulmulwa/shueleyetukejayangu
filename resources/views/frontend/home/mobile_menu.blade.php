
@php
    $setting = App\Models\SiteSetting::find(1);
    ///finding data with id number 1 from the table
@endphp


<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><i class="fas fa-times"></i></div>

    <nav class="menu-box">
        {{-- <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}" alt=""></a></figure> --}}

        <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <div class="contact-info">
            <h4>Contact Info</h4>
              <ul class="social-links clearfix">
                    <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ $setting->company_pintrest }}"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{ $setting->company_address }}"><i class="fab fa-google"></i></a></li>
                    <li><a href="{{ $setting->company_address }}"><i class="fab fa-whatsapp"></i></a></li>
                </ul>
        </div>
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
