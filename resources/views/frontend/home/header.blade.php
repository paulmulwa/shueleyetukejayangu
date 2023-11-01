@php
    $setting = App\Models\SiteSetting::find(1);
    ///finding data with id number 1 from the table
@endphp
<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="far fa-map-marker-alt"></i>{{ $setting->company_address }}</li>
                    <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li>
                    <li><i class="far fa-phone"></i><a href="tel:0705069145">{{ $setting->support_phone }}</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="{{ $setting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="{{ $setting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="{{ $setting->company_pintrest }}"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="{{ $setting->company_address }}"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="{{ $setting->company_address }}"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
                @auth
                <div class="sign-box">
                    <a href="{{ route('dashboard') }}"><i class="fas fa-user">
                        </i>Dashboard</a>
                        <a href="{{ route('user.logout') }}"><i class="fas fa-key">
                        </i>Logout</a>
                </div>
                @else
                <div class="sign-box">
                    <a href="{{ route('login') }}"><i class="fas fa-key">
                    </i>Signin</a>
                </div>
                @endauth


            </div>
        </div>
    </div>
<!-- header-lower -->
<div class="header-lower">
<div class="outer-box">
<div class="main-box">
<div class="logo-box">
<figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset($setting->logo) }}" alt=""></a></figure>
</div>
<div class="menu-area clearfix">
<!--Mobile Navigation Toggler-->
<div class="mobile-nav-toggler">
<i class="icon-bar"></i>
<i class="icon-bar"></i>
<i class="icon-bar"></i>
</div>
<nav class="main-menu navbar-expand-md navbar-light">
<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
    <ul class="navigation clearfix">
        {{-- <li class="current dropdown"><a href="{{ url('/') }}"><span>Home</span></a> --}}
            {{-- <ul> --}}
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/') }}">About Us</a></li>


        <li class="dropdown"><a href="#"><span>Property</span></a>
            <ul>
                <li><a href="{{ route('rent.property') }}">Buy</a></li>
                <li><a href="{{ route('buy.property') }}">Rent</a></li>

            </ul>
        </li>
        <li><a href="{{ route('blog.list') }}">Blog</a></li>

        <li><a href="{{ url('/') }}">Agents</a></li>
        </li>



{{-- ////////////////// --}}



                <li><a href="{{ route('rent.property') }}">Buy</a></li>
                <li><a href="{{ route('buy.property') }}">Rent</a></li>












{{-- /////////////////// --}}














        <li><a href="contact.html"><span>Contact</span></a></li>
        <li>
            {{-- <a href="contact.html"><span>Contact</span></a> --}}
            <div class="btn-box">

                <a href="{{ route('login') }}" class="btn btn-success"><span>+</span>Add Listing</a>

        </li>
    </div>

    </ul>
</div>
</nav>
</div>

</div>
</div>
</div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ url('/') }}"><img src="{{asset($setting->logo)}}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                {{-- <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                </div> --}}
            </div>
        </div>
    </div>
</header>
