@php
    use App\Models\ContactUs;
    $contact = ContactUs::find(1); // Finding data with ID 1
@endphp

@extends('frontend.frontend_dashboard')
@section('main')

<!--Page Title-->
<section class="page-title-two bg-color-1 centred">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{ asset('frontend/assets/images/shape/shape-9.png') }})"></div>
        <div class="pattern-2" style="background-image: url({{ asset('frontend/assets/images/shape/shape-10.png') }})"></div>
    </div>
    <div class="auto-container">
        <div class="content-box clearfix">
            <h1>Contact us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Contact us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->


<!-- contact-info-section -->
<section class="contact-info-section sec-pad centred">
    <div class="auto-container">
        <div class="sec-title">
            <h5>Contact us</h5>
            <h2>Get In Touch</h2>
        </div>
        @if($contact)
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-32"></i></div>
                        <h4>Email Address</h4>
                        <p>
                            <a href="mailto:{{ $contact->email1 }}">{{ $contact->email1 }}</a><br />
                            <a href="mailto:{{ $contact->email2 }}">{{ $contact->email2 }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-33"></i></div>
                        <h4>Phone Number</h4>
                        <p>
                            <a href="tel:{{ $contact->phone1 }}">{{ $contact->phone1 }}</a><br />
                            <a href="tel:{{ $contact->phone2 }}">{{ $contact->phone2 }}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 info-block">
                <div class="info-block-one">
                    <div class="inner-box">
                        <div class="icon-box"><i class="icon-34"></i></div>
                        <h4>Office Address</h4>
                        <p>{{ $contact->address1 }}</p>
                        <p>{{ $contact->address2 }}</p>
                    </div>
                </div>
            </div>
        </div>
        @else
            <p class="text-danger text-center">Contact information is currently unavailable.</p>
        @endif
    </div>
</section>


<!-- contact-section -->
<section class="contact-section bg-color-1">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content-box">
                    <div class="sec-title">
                        <h5>Contact</h5>
                        <h2>Contact Us</h2>
                    </div>
                    <div class="form-inner">
                        @auth
                        @php
                            $id = Auth::user()->id;
                            $userData = App\Models\User::find($id);
                        @endphp

                        <form action="{{route('user.contact')}}" method="post" class="default-form">
                           @csrf
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="name" value="{{ $userData->name  }}" placeholder="Your Name" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="email" value="{{ $userData->email }}" placeholder="Email address" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="phone" placeholder="Phone" value="{{ $userData->phone }}">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="subject" placeholder="Subject">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button class="theme-btn btn-one" type="submit" name="submit-form">Send Message</button>
                                </div>
                            </div>
                        </form>
                        @endauth
                        @guest
                            <p class="text-center">Please <a href="{{ route('login') }}">login</a> to send us a message.</p>
                        @endguest
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 map-column">
                <div class="google-map-area">
                  <div class="google-map-area">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.816903746152!2d36.820170674965674!3d-1.2837413987040533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d5d63997f1%3A0xfb825e08591621ab!2sKimathi%20St%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1752809750923!5m2!1sen!2ske"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-section end -->

@endsection
