<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>@yield('title')</title>
        @vite(['resources/js/app.js'])

    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    {{-- <link rel="stylesheet" href="../../../assets/vendors/select2/select2.min.css"> --}}


    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/dropzone/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/dropify/dist/dropify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/pickr/themes/classic.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">

    <link href="{{ asset('frontend/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        {{-- @include('frontend.home.preload') --}}
        <!-- preloader end -->


        <!-- switcher menu -->

        <!-- end switcher menu -->

        @include('frontend.home.header')
        <!-- main header -->

        <!-- main-header end -->

        <!-- Mobile Menu  -->
        @include('frontend.home.mobile_menu')

        <!-- banner-section -->

        <!-- download-section end -->

        @yield('main')
        <!-- main-footer -->

        @include('frontend.home.footer')
        <!-- main-footer end -->



        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-angle-up"></span>
        </button>
    </div>



    <!-- jequery plugins -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/wow.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/validation.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/isotope.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/nav-tool.js') }}"></script>


    {{-- <script src="{{asset('backend/assets/vendors/inputmask/jquery.inputmask.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/select2/select2.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/typeahead.js/typeahead.bundle.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js')}}"></script>
    <script src="{{asset('backend/assets/vendors/dropzone/dropzone.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/dropify/dist/dropify.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/pickr/pickr.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/moment/moment.min.js')}}"></script>
	<script src="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
	<script src="{{asset('backend/assets/js/dropzone.js')}}"></script>
	<script src="{{asset('backend/assets/js/dropify.js')}}"></script>
	<script src="{{asset('backend/assets/js/pickr.js')}}"></script>
	<script src="{{asset('backend/assets/js/flatpickr.js')}}"></script> --}}

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="{{ asset('frontend/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/map-helper.js') }}"></script>

    <!-- main-js -->


    <!-- End custom js for this page -->
    <!-- ----------------------map script ------------------------>
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
 <script src="{{ asset('frontend/assets/js/gmaps.js')}}"></script>
 <script src="{{ asset('frontend/assets/js/map-helper.js')}}"></script>
     <!------------------------------end of map script --------------------->
    <!-- main-js --> --}}

    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <!-- Custom js for this page -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script> --}}

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <script type="text/javascript ">
        // function addToWishList(property_id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        })
        //adding to wishlist
        function addToWishList(property_id) {
            $.ajax({
                type: "POST",
                dataType: 'json',
                url: "/add-to-wishList/" + property_id,

                success: function(data) {
                    wishlist();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })

                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }
                }



            })
        }

    // ....................juctchecking..............................................
    </script>
    {{-- ///start displayinh --}}
    {{-- ///////////////////////////////start loading stuff in wishlist//////// --}}
<script type="text/javascript">
        function wishlist() {
            $.ajax({
                type: "GET",
                //getting data
                dataType: 'json',
                //data formart
                url: "/get-wishlist-property/",

                success: function(response) {
                    $('#wishQty').text(response.wishQty);
                    var rows = ""
                    $.each(response.wishlist, function(key, value) {
                        rows += `
<div class="deals-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="/${value.property.property_thumbmail}" alt=""></figure>
                                        <div class="batch"><i class="icon-11"></i></div>
                                        <span class="category">Featured</span>
                                        <div class="buy-btn"><a href="#">${value.property.property_status}</a></div>
                                    </div>
                                    <div class="lower-content">
                                        <div class="title-text"><h4><a href="#">${value.property.property_name}</a></h4></div>
                                        <div class="price-box clearfix">
                                            <div class="price-info pull-left">
                                                <h6>Start From</h6>
                                                <h4>Ksh${value.property.lowest_price}</h4>
                                            </div>
                                            <div class="author-box pull-right">
                                                <figure class="author-thumb">
                                                    <img src="{{ asset('/assets/frontend/images/feature/author-1.jpg') }}" alt="">
                                                    <span>${value.property.city}</span>
                                                </figure>
                                            </div>
                                        </div>
                                        <p>${value.property.short_descp}</p>
                                        <ul class="more-details clearfix">
                                            <li><i class="icon-14"></i>${value.property.bedrooms}</li>
                                            <li><i class="icon-15"></i>${value.property.bathrooms}</li>
                                            <li><i class="icon-16"></i>${value.property.property_size} Sq Ft</li>
                                        </ul>
                                        <div class="other-info-box clearfix">
                                            <ul class="other-option pull-right clearfix">
                                                <li><a type="submit" class="text-body" id="${value.id}"
                                                    onclick="wishlistRemove(this.id)">
                                                    <i class="fa fa-trash"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
`



                    });

                    $('#wishlist').html(rows);
                }
            })
        }

        </script>
        <script type="text/javascript">
        wishlist();
        ////wishlist Remove start
        function wishlistRemove(id) {
            $.ajax({
                type: "GET",
                //getting data
                dataType: 'json',
                // data formart
                url: "/wishlist-remove/" + id,

                success: function(data) {
                    wishlist();
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',

                        showConfirmButton: false,
                        timer: 3000
                    })
                    if ($.isEmptyObject(data.error)) {
                        Toast.fire({
                            type: 'success',
                            icon: 'success',
                            title: data.success,
                        })

                    } else {

                        Toast.fire({
                            type: 'error',
                            icon: 'error',
                            title: data.error,
                        })
                    }
                }



            })
        }
</script>

{{-- // <--!---------fjjfjjfjjj------------ comapre items------------------------------!-> --}}
<script type="text/javascript">
function addToCompare(property_id) {
    $.ajax({
        type: "POST",
        dataType: 'json',
        url: "/add-to-compare/"+property_id,

        success: function(data) {
            compare();
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',

                showConfirmButton: false,
                timer: 3000
            })
            if ($.isEmptyObject(data.error)) {
                Toast.fire({
                    type: 'success',
                    icon: 'success',
                    title: data.success,
                })

            } else {

                Toast.fire({
                    type: 'error',
                    icon: 'error',
                    title: data.error,
                })
            }
        }



    })
}

</script>
<!-----------------------------////////////////////---compare---.////////////////-----------!----------------->


<script type="text/javascript">
    function compare() {
        $.ajax({
            type: "GET",
            //getting data
            dataType: 'json',
            //data formart
            url: "/get-compare-property/",

            success: function(response) {
                var rows = ""
                $.each(response, function(key,value) {
                    rows += `
                    <tr>
                        <th>Property Info</th>
                        <th>
                            <figure class="image-box"><img src="/${value.property.property_thumbmail}" alt="thumbmail"></figure>
                            <div class="title"> Property Name: ${value.property.property_name}</div>
                            <div class="price"> Property Price: Ksh ${value.property.lowest_price}</div>
                        </th>
</tr>
                        <td>
                            <p>City</p>
                        </td>
                        <td>
                            <p>${value.property.city}</p>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <p>Property Size</p>
                        </td>
                        <td>
                            <p>${value.property.property_size}Ft</p>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <p>BedRooms</p>
                        </td>
                        <td>
                            <p>${value.property.bedrooms}</p>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <p>Bathrooms</p>
                        </td>
                        <td>
                            <p>${value.property.bathrooms}</p>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <p>Action</p>
                        </td>
                        <td>
                    <a type="submit" class="text-body" id="${value.id}"
                                                    onclick="compareRemove(this.id)">
                                                    <i class="fa fa-trash"></i></a>
                        </td>

                    </tr>


`

                });

                $('#compare').html(rows);
            }
        })
    }
  compare();

     </script>

    {{-- </script> --}}
<script type="text/javascript">
    // compare();
    ////wishlist Remove start
    function compareRemove(id) {
        $.ajax({
            type: "GET",
            //getting data
            dataType: 'json',
            // data formart
            url: "/compare-remove/" + id,

            success: function(data) {
                compare();
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success,
                    })

                } else {

                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    })
                }
            }



        })
    }
</script>



















{{-------------------------- ///////////////////end compare///////////////////// ----------------------}}

</body><!-- End of .page_wrapper -->

</html>
