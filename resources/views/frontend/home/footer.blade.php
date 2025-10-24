@php
    $setting = App\Models\SiteSetting::find(1);
    $blog = App\Models\BlogPost::latest()->limit(2)->get();

    ///finding data with id number 1 from the table
@endphp
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>About Us</h3>
                        </div>
                        <div class="text">
                            <p>At Keja Yangu, we are dedicated to redefining the real estate experience for our clients.
                            Whether you're buying, selling, renting, or investing, we understand the significance of these decisions and are here to support you every step of the way.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('aboutus/aboutus') }}">About Us</a></li>
                                <li><a href="{{ route('rent.property') }}">Buy</a></li>
                                <li><a href="{{ route('buy.property') }}">Rent</a></li>
                                <li><a href="{{ url('/agents/front_agents') }}">Agents</a></li>
                                <li><a href="{{ route('contactus.contactus') }}"><span>Contact</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget post-widget">
                        <div class="widget-title">
                            <h3>Top News</h3>
                        </div>
                        <div class="post-inner">
                            @foreach($blog as $item)
                            <div class="post">
                                <figure class="post-thumb"><a href="{{url('blog/details/'.$item->post_slug)}}"><img src="{{asset($item->post_image)}}" alt=""></a></figure>
                                <h5><a href="{{url('blog/details/'.$item->post_slug)}}">{{$item->post_title}}</a></h5>
                                <p>{{ $item->created_at->format('M d Y') }}</p>
                            </div>
                                    @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>{{ $setting->company_address }}</li>
                                <li><i class="fas fa-microphone"></i><a href="tel:254705069145">{{ $setting->support_phone }}</a></li>
                                <li><i class="fas fa-envelope"></i><a href="info@paulmulwa101@gmail.com">{{ $setting->email }}.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="footer-logo"><a href="{{ url('/') }}"><img src="{{asset('frontend/assets/images/footer-logo3.png')}}" alt=""></a></figure>
                <div class="copyright pull-left">
                    {{-- <p><a href="index.html">Keja Yangu</a> &copy; 2023 All Right Reserved</p> --}}
                    <p><a href="{{ url('/') }}">{{ $setting->copyright }}</a> </p>

                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="index.html">Terms of Service</a></li>
                    <li><a href="index.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
