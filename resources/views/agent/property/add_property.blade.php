@extends('agent.agent_dashboard')
@section('agent')
    <!-- partial -->

    {{--  --}}





    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


    <div class="page-content">


        <!-- left wrapper end -->
        <!-- middle wrapper start -->
        {{-- <div class="col-md-12 col-xl-12 middle-wrapper">
            <div class="row">
                <div class="card">
                    <div class="card-body">

                        <h6 class="card-title" style="mb-10">Add Property</h6>

                        <form id="myForm" method="POST" action="{{ route('store.amenities') }}" class="forms-sample">
                            @csrf --}}
        {{-- <div class="form-group mb-3, mt-5">
                                <label for="exampleInputUsername1" class="form-label">Add Property</label>
                                <input type="text" name="amenities_name" class="form-control" id="amenities_name"
                                    autocomplete="off" placeholder="Amenities Name"> --}}

        {{-- </div> --}}

        <div class="row">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Add Property</h6>
                            <form method="post" action="{{ route('agent.store.property') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Name</label>
                                            <input type="text" name="property_name" class="form-control"
                                                placeholder="Enter property name">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Status</label>
                                            <select name="property_status" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Type</option>
                                                {{-- @foreach ($property_status as $pstatus)
                                                <option value="{{ $ptype->id }}">{{ $ptype->type_name }}</option>

                                                @endforeach --}}
                                             <option value="rent">For Rent</option>
                                                <option value="buy">For Buy</option>

                                            </select>
                                        </div>
                                    </div>

{{--
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="mb-3">
                                                <label class="form-label">Property Type</label>
                                                <select name="ptype_id" class="form-select" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select Type</option>
                                                    @foreach($propertytype as $ptype)
                                                        <option value="{{ $ptype->id }}">{{ $ptype->type_name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div><!-- Col -->
     --}}





















                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Lowest price</label>
                                            <input type="text" name="lowest_price" class="form-control"
                                                placeholder="Enter Lowest price">
                                        </div>
                                    </div>
                                    <!-- Col -->

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Max Price</label>
                                            <input type="text" name="max_price" class="form-control"
                                                placeholder="Enter Max Price">
                                        </div>
                                    </div>


                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">MainThumbmail</label>
                                            <input type="file" name="property_thumbmail" class="form-control"
                                                placeholder="Enter MainThumbmail" onchange="mainThamUrl(this)">
                                            <img src="" id="mainThmb">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Multiple images</label>
                                            <input type="file" name="multi_img[]" class="form-control"
                                                placeholder="Enter Multiple images" id="multiImg" multiple="">

                                            <div class="row" id="preview_img">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Bedrooms</label>
                                                <input type="number" name="bedrooms" class="form-control"
                                                    placeholder="Enter number of Bedrooms">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Bathrooms</label>
                                                <input type="text" name="bathrooms" class="form-control"
                                                    placeholder="Enter Number of Bathrooms">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Garage</label>
                                                <input type="text" name="garage" class="form-control"
                                                    placeholder="Garage">
                                            </div>
                                        </div>
                                        <!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Garage Size</label>
                                                <input type="text" name="garage_size" class="form-control"
                                                    placeholder="Garage Size">
                                            </div>
                                        </div><!-- Col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" name="city" class="form-control"
                                                    placeholder="Enter city">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">State</label>


                                                <select name="state" class="form-select" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select State</option>
                                                    @foreach($pstate as $state)
                                                        <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                                                    @endforeach

                                                </select>











                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Postal Code</label>
                                                <input type="text" name="postal_code" class="form-control"
                                                    placeholder="Enter postal code">

                                            </div>
                                        </div>
                                        <!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Enter Address">
                                            </div>
                                        </div><!-- Col -->
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Property Size</label>
                                                <input type="text" name="property_size" class="form-control"
                                                    placeholder="Enter property size">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Property Video</label>
                                                <input type="text" name="property_video" class="form-control"
                                                    placeholder="Enter Property Video">
                                            </div>
                                        </div>
                                        <!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Neighborhood</label>
                                                <input type="text" name="neighborhood" class="form-control"
                                                    placeholder="Enter neighborhood">
                                            </div>
                                        </div><!-- Col -->
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Latitude</label>
                                                <input type="text" name="latitude" class="form-control"
                                                    placeholder="Enter latitude">
                                                <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank">Go here to get latitude from address</a>
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Longitude</label>
                                                <input type="text" name="longitude" class="form-control" autocomplete="off"
                                                    placeholder="Enter Longitude">
                                                <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank">Go here to get latitude from address</a>

                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="mb-3">
                                            <label class="form-label">Property Type</label>
                                            <select name="ptype_id" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Type</option>
                                                @foreach($propertytype as $ptype)
                                                    <option value="{{ $ptype->id }}">{{ $ptype->type_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Amenities</label>

                                            <select name="amenities_id[]" class="js-example-basic-multiple form-select"
                                                multiple="multiple" data-width="100%">
                                                @foreach ($amenities as $ameni)
                                                    <option value="{{ $ameni->id }}">{{ $ameni->amenities_name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    {{-- </div>
                                </div> --}}


                                    <!-- Col -->
                                    {{-- <div class="col-sm-3">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Agent</label>
                                            <select name="agent_id" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Agent</option>
                                                @foreach ($activeAgent as $agent)
                                                    <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div><!-- Col -->
                                </div> --}}





                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label label class="form-label">Short Description</label>
                                        {{-- <textarea="text" name="short_descp" class="form-control"
                                            placeholder="Enter Short Description"</textarea> --}}
                                            <textarea name="short_descp" class="form-control" id="exampleFormControlTextarea1" rows="3">
                                            </textarea>

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-3">
                                        <label class="form-label">Long Description</label>
                                        <textarea class="form-control" name="long_descp" id="tinymceExample" rows="10"></textarea>
                                    </div>
                                </div>
                        </div>
                        <hr>
                        {{-- {{-- <div class="col-md-4"> --}}

                        {{-- ----------------------------------- featured part ----------------------------------------------- --}}
                        <div class="form-group mb-3">
                            <div class="form-check form-check-inline" mt-5>
                                <input type="checkbox" name="featured" class="form-check-input" value="1"
                                    id="checkInline1"><label class="form-check-label" for="checkInline1">Features
                                    Property</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" name="hot" value="1"
                                    id="checkInline">
                                <label class="form-check-label" for="checkInline">Hot Property </label> </label>
                                <br>
                            </div>
                            <hr>
                            {{-- ----------------------------------- featured part ----------------------------------------------- --}}



                            <div class="row add_item", style="mt-5",mb-10>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="facility_name" class="form-label">Facilities </label>
                                        <select name="facility_name[]" id="facility_name" class="form-control">
                                            <option value="">Select Facility</option>
                                            <option value="Hospital">Hospital</option>
                                            <option value="SuperMarket">Super Market</option>
                                            <option value="School">School</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Pharmacy">Pharmacy</option>
                                            <option value="Airport">Airport</option>
                                            <option value="Railways">Railways</option>
                                            <option value="Bus Stop">Bus Stop</option>
                                            <option value="Beach">Beach</option>
                                            <option value="Mall">Mall</option>
                                            <option value="Bank">Bank</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-3">
                                        <label for="distance" class="form-label"> Distance </label>
                                        <input type="text" name="distance[]" id="distance" class="form-control"
                                            placeholder="Distance (Km)">
                                    </div>
                                </div>
                                <div class="form-group col-md-4" style="padding-top: 30px;">
                                    <a class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i> Add
                                        More..</a>
                                </div>
                            </div> <!---end row-->


                            <!--========== Start of add multiple class with ajax ==============-->
                            <div style="visibility: hidden">
                                <div class="whole_extra_item_add" id="whole_extra_item_add">
                                    <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                                        <div class="container mt-2">
                                            <div class="row">

                                                <div class="form-group col-md-4">
                                                    <label for="facility_name">Facilities</label>
                                                    <select name="facility_name[]" id="facility_name"
                                                        class="form-control">
                                                        <option value="">Select Facility</option>
                                                        <option value="Hospital">Hospital</option>
                                                        <option value="SuperMarket">Super Market</option>
                                                        <option value="School">School</option>
                                                        <option value="Entertainment">Entertainment</option>
                                                        <option value="Pharmacy">Pharmacy</option>
                                                        <option value="Airport">Airport</option>
                                                        <option value="Railways">Railways</option>
                                                        <option value="Bus Stop">Bus Stop</option>
                                                        <option value="Beach">Beach</option>
                                                        <option value="Mall">Mall</option>
                                                        <option value="Bank">Bank</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="distance">Distance</label>
                                                    <input type="text" name="distance[]" id="distance"
                                                        class="form-control" placeholder="Distance (Km)">
                                                </div>
                                                <div class="form-group col-md-4" style="padding-top: 20px">
                                                    <span class="btn btn-success btn-sm addeventmore"><i
                                                            class="fa fa-plus-circle">Add</i></span>
                                                    <span class="btn btn-danger btn-sm removeeventmore"><i
                                                            class="fa fa-minus-circle">Remove</i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!----For Section-------->
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    var counter = 0;
                                    $(document).on("click", ".addeventmore", function() {
                                        var whole_extra_item_add = $("#whole_extra_item_add").html();
                                        $(this).closest(".add_item").append(whole_extra_item_add);
                                        counter++;
                                    });
                                    $(document).on("click", ".removeeventmore", function(event) {
                                        $(this).closest("#whole_extra_item_delete").remove();
                                        counter -= 1
                                    });
                                });
                            </script>
                            <!--========== End of add multiple class with ajax ==============-->





                            <button type="submit" class="btn btn-primary submit">Save Changes</button>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        </div>


    </div>


















    {{-- <div class="mt-4">
                                <button type="submit" class="btn btn-primary me-2">Submit</button>
                            </div> --}}
    <script type="text/javascript">
        $(document).ready(function() {
            $('#myForm').validate({
                rules: {
                    property_name: {
                        required: true,
                    },
                    property_status: {
                        required: true,
                    },
                    lowest_price: {
                        required: true,
                    },
                    max_price: {
                        required: true,
                    },
                    property_thumbmail: {
                        required: true,
                    },
                    multi_img: {
                        required: true,
                    },
                    ptype_id: {
                        required: true,
                    },

                },
                messages: {
                    property_name: {
                        required: 'Please Enter Property Name',
                    },
                    property_status: {
                        required: 'Please Enter Property status',
                    },
                    lowest_price: {
                        required: 'Please Enter lowest Price',
                    },
                    max_price: {
                        required: 'Please Enter maximum price',
                    },
                    ptype_id: {
                        required: 'Please Enter Property Id',
                    },

                    property_thumbmail: {
                        required: 'Please Enter Property thumbmail',
                    },
                    multi_img: {
                        required: 'Please Enter multiple images',
                    },


                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>

    <script type="text/javascript">
        function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);

            }
        }
    </script>



    <script>
        $(document).ready(function() {
            $('#multiImg').on('change', function() { //on file input change
                if (window.File && window.FileReader && window.FileList && window
                    .Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data

                    $.each(data, function(index, file) { //loop though each file
                        if (/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file
                            .type)) { //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file) { //trigger function on successful read
                                return function(e) {
                                    var img = $('<img/>').addClass('thumb').attr('src',
                                            e.target.result).width(100)
                                        .height(80); //create image element
                                    $('#preview_img').append(
                                    img); //append image to output element
                                };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });

                } else {
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
            });
        });
    </script>
@endsection
