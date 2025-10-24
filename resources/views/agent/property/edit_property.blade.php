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
                            <h6 class="card-title">Edit Property</h6>
                            <form method="post" action="{{ route('agent.update.property', ['id' => $property->id]) }}"
                                id="myForm" enctype="multipart/form-data">
                                {{-- action="{{ route('tasks.update', ['task' => $record->id]) --}}
                                {{-- <form action="{{ route('inventory.store', ['id' => $inventory->id])  }}" method='post'> --}}


                                {{-- <form class = "form-vertical" role = "form" action="{{ url('update.property/'.$property->id) }}" --}}
                                {{-- Route: update.property] ] [Missing parameter: id]. --}}

                                @csrf
                                <input type="hidden" name="id" value="{{ $property->id }}">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Name</label>
                                            <input type="text" name="property_name" class="form-control"
                                                placeholder="Enter property name" value="{{ $property->property_name }}">
                                        </div>
                                    </div><!-- Col -->
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Status</label>
                                            <select name="property_status" class="form-select"
                                                id="exampleFormControlSelect1">
                                                <option value="rent"
                                                    {{ $property->property_status == 'rent' ? 'selected' : '' }}>For Rent
                                                </option>
                                                <option
                                                    value="buy"{{ $property->property_status == 'buy' ? 'selected' : '' }}>
                                                    For Buy</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Lowest price</label>
                                            <input type="text" name="lowest_price" class="form-control"
                                                placeholder="Enter property name" value="{{ $property->lowest_price }}">
                                        </div>
                                    </div>
                                    <!-- Col -->

                                    <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Max Price</label>
                                            <input type="text" name="max_price" class="form-control"
                                                placeholder="Enter property name" value="{{ $property->max_price }}">
                                        </div>
                                    </div>


                                    {{-- <div class="col-sm-6">
                                        <div class="form-group mb-3">
                                            <label class="form-label">MainThumbmail</label>
                                            <input type="file" name="property_thumbmail" class="form-control"
                                                placeholder="Enter property name" onchange="mainThamUrl(this)">
                                            <img src="" id="mainThmb" value="{{ $property->property_thumbmail }}">
                                        </div>
                                    </div> --}}
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Multiple images</label>
                                            <input type="file" name="multi_img[]" class="form-control"
                                                placeholder="Enter property name" id="multiImg" multiple=""
                                                value="{{ $property->property_name }}">

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
                                                    placeholder="Enter number of Bedrooms"
                                                    value="{{ $property->bedrooms }}">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Bathrooms</label>
                                                <input type="text" name="bathrooms" class="form-control"
                                                    placeholder="Enter Number of Bathrooms"
                                                    value="{{ $property->bathrooms }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Garage</label>
                                                <input type="text" name="garage" class="form-control"
                                                    placeholder="Garage"value="{{ $property->garage }}">
                                            </div>
                                        </div>
                                        <!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Garage Size</label>
                                                <input type="text" name="garage_size" class="form-control"
                                                    placeholder="Garage Size" value="{{ $property->garage_size }}">
                                            </div>
                                        </div><!-- Col -->
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" name="city" class="form-control"
                                                    placeholder="Enter city" value="{{ $property->city }}">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">County</label>
                                                <select name="state" class="form-select" id="exampleFormControlSelect1">
                                                    <option selected="" disabled="">Select County</option>
                                                    @foreach ($pstate as $state)
                                                        <option value="{{ $state->id }}"
                                                            {{ $state->id == $property->state ? 'selected' : '' }}>
                                                            {{ $state->state_name }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Postal Code</label>
                                                <input type="text" name="postal_code" class="form-control"
                                                    placeholder="Enter postal code" value="{{ $property->postal_code }}">
                                            </div>
                                        </div>
                                        <!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Address</label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Enter Address" value="{{ $property->address }}">
                                            </div>
                                        </div><!-- Col -->
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Property Size</label>
                                                <input type="text" name="property_size" class="form-control"
                                                    placeholder="Enter property size"
                                                    value="{{ $property->property_size }}">
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Property Video</label>
                                                <input type="text" name="property_video" class="form-control"
                                                    placeholder="Enter Property Video"
                                                    value="{{ $property->property_video }}">
                                            </div>
                                        </div>
                                        <!-- Col -->
                                        <div class="col-sm-3">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Neighborhood</label>
                                                <input type="text" name="neighborhood" class="form-control"
                                                    placeholder="Enter neighborhood"
                                                    value="{{ $property->neighborhood }}">
                                            </div>
                                        </div><!-- Col -->
                                    </div>
                                    <!-- Row -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Latitude</label>
                                                <input type="text" name="latitude" class="form-control"
                                                    placeholder="Enter latitude" value="{{ $property->latitude }}">
                                                <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank">Go here to get latitude from address</a>
                                            </div>
                                        </div><!-- Col -->
                                        <div class="col-sm-6">
                                            <div class="form-group mb-3">
                                                <label class="form-label">Longitude</label>
                                                <input type="text" class="form-control" name="longitude"
                                                    autocomplete="off" placeholder="Enter Longitude"
                                                    value="{{ $property->longitude }}">
                                                <a href="https://www.latlong.net/convert-address-to-lat-long.html"
                                                    target="_blank">Go here to get latitude from address</a>

                                            </div>
                                        </div><!-- Col -->
                                    </div><!-- Row -->
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Type</label>
                                            <select name="ptype_id" class="form-select" id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select Type</option>
                                                @foreach ($propertytype as $ptype)
                                                    <option value="{{ $ptype->id }}"
                                                        {{ $ptype->id == $property->ptype_id ? 'selected' : '' }}>
                                                        {{ $ptype->type_name }}</option>
                                                    {{-- {{ $property->property_status =='rent' ? 'selected': '' }} --}}
                                                @endforeach

                                            </select>
                                        </div>
                                    </div><!-- Col -->

                                    <div class="col-sm-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Property Amenities</label>

                                            <select name="amenities_id[]" class="js-example-basic-multiple form-select"
                                                multiple="multiple" data-width="100%"
                                                value="{{ $property->amenities }}">
                                                @foreach ($amenities as $ameni)
                                                    <option
                                                        value="{{ $ameni->amenities_name }}"
                                                        {{ in_array($ameni->amenities_name, $property_ami) ? 'selected' : '' }}>
                                                        {{ $ameni->amenities_name }}
                                                    </option>
                                                @endforeach






                                                {{-- @foreach ($amenities as $ameni)
                                                <option
                                                    value="{{ $ameni->amenities_name}}"
                                                    {{ in_array($ameni->amenities_name, $property_ami)
                                                    ? 'selected' : '' }}>
                                                    {{ $ameni->amenities_name }}
                                                </option>
                                            @endforeach --}}













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
                                                    <option value="{{ $agent->id }}"
                                                        {{ $agent->id == $property->agent_id ? 'selected' : '' }}>
                                                        {{ $agent->name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div><!-- Col --> --}}
                                    {{-- </div> --}}
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Short Description</label>
                                            {{-- <input type="text" name="short_desc" class="form-control" --}}
                                            <textarea name="short_descp" class="form-control" id="exampleFormControlTextarea1" rows="3">
                                            {!! $property->short_descp !!}</textarea>

                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label class="form-label">Long Description</label>
                                            <textarea class="form-control" name="long_descp" id="tinymceExample" rows="10">
                                            {!! $property->long_descp !!}</textarea>


                                        </div>
                                    </div>
                                </div>
                                <hr>
                                {{-- {{-- <div class="col-md-4"> --}}

                                {{-- ----------------------------------- featured part ----------------------------------------------- --}}

                                <div class="form-group mb-3">
                                    <div class="form-check form-check-inline" mt-5>
                                        <input type="checkbox" name="featured" class="form-check-input" value="1"
                                            id="checkInline1"{{ $property->featured == '1' ? 'checked' : '' }}><label
                                            class="form-check-label" for="checkInline1">Features
                                            Property</label>
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="hot" value="1"
                                            id="checkInline">
                                        <label class="form-check-label"
                                            for="checkInline"{{ $property->hot == '1' ? 'checked' : '' }}>Hot Property
                                        </label> </label>
                                        <br>
                                    </div>
                                    <hr>
                                    {{-- ----------------------------------- featured part ----------------------------------------------- --}}

                                    <!---end row-->
                                </div>

                                {{-- </div> --}}

                                <!----For Section-------->

                                <!--========== End of add multiple class with ajax ==============-->

                                <button type="submit" class="btn btn-primary submit">Save Changes</button>



                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </div>
    {{-- ------------------------------------- mainthumbmail ------------------------------------------- --}}


    <div class="page-content" style="margin-top:-35px;">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit ThumbMail</h6>
                            <form method="post" action="{{ route('agent.update.property.thumbmail') }}" id="myForm"
                                enctype="multipart/form-data">

                                @csrf
                                <input type="hidden" name="id" value="{{ $property->id }}">
                                <input type="hidden" name="old_img" value="{{ $property->property_thumbmail }}">


                                <div class="row mb-3">
                                    <div class="form-group col-md-6">
                                        <label class="form-label">MainThumbmail</label>
                                        <input type="file" name="property_thumbmail" class="form-control"
                                            placeholder="Enter property name" onchange="mainThamUrl(this)">
                                        <img src="" id="mainThmb" value="{{ $property->property_thumbmail }}">

                                    </div>

                                    {{-- </div> --}}
                                    <div class="form-group col-md-6">
                                        {{-- <div class="form-group mb-3"> --}}
                                        <label class="form-label"></label>
                                        <img src="{{ asset($property->property_thumbmail) }}"
                                            style="width:100px; height:100px;">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary submit">Save Changes</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- ////////////////////////////end of thumbmail/////////////////// --}}

    {{-- ////////////////////////////start of multiimages/////////////////// --}}


    <div class="page-content" style="margin-top:-35px;">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Multiimages</h6>
                            <form method="post" action="{{ route('agent.update.property.multiimage') }}" id="myForm"
                                enctype="multipart/form-data">

                                @csrf
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>SI</th>
                                                <th>Image</th>
                                                <th>Change Image</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($multiImage as $key => $img)
                                                <tr>
                                                    <td>{{ $key + 1 }}</td>
                                                    <td class="py-1">
                                                        <img src="{{ asset($img->photo_name) }}" alt="image"
                                                            style="width:80px; height:80px;">
                                                    </td>
                                                    <td>
                                                        <input type="file" class="form-control"
                                                            name="multi_img[{{ $img->id }}]">
                                                    </td>

                                                    <td>
                                                        <input type="submit" class="btn btn-primary px-4"
                                                            value="Update Image">
                                                        <a href="{{ route('agent.property.multiimage.delete', $img->id) }}"
                                                            class="btn btn-danger" id="delete">Delete</a>
                                                    </td>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                                <br>
                                <br>
                                {{-- <button type="submit" class="btn btn-primary submit">Save Changes</button> --}}

                            </form>

                            {{-- ------------------------------- ///////////add multi image form////////// ---------------------------------------------- --}}

                            <form method="post" action="{{ route('agent.store.new.multiimage') }}" id="myForm"
                                enctype="multipart/form-data">

                                @csrf
                                <input type="hidden" name="imageid" value="{{ $property->id }}">

                                <table class="table table-striped">

                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="file" class="form-control" name="multi_img">
                                            </td>

                                            <td>
                                                <input type="submit" class="btn btn-info px-4" value="Add Image">
                                            </td>

                                        </tr>

                                    </tbody>

                                </table>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ------------------------------------- thumbmail ------------------------------------------- --}}

    {{-- ------------------------------------- start of Edit facilitities------------------------------------------- --}}

        <div class="page-content" style="margin-top:-35px;">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Facilities</h6>
                            <form method="post" action="{{ route('agent.update.property.facilities') }}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                    <input type="hidden" name="id" value="{{ $property->id }}">
                                @foreach($facilities as $item)
                                <div class="row add_item">
                <div class="whole_extra_item_add" id="whole_extra_item_add">
                <div class="whole_extra_item_delete" id="whole_extra_item_delete">
                                        <div class="container mt-2">
                                            <div class="row">

                                                <div class="form-group col-md-4">
                                                    <label for="facility_name">Facilities</label>
                                                    <select name="facility_name[]" id="facility_name"
                                                        class="form-control">
                                                        <option value="">Select Facility</option>
                                                        <option value="Hospital" {{$item->facility_name =='Hospital' ? 'selected':''}}>Hospital</option>
                                                        <option value="Super Market"{{$item->facility_name =='Super Market' ? 'selected':''}}>Super Market</option>
                                                        <option value="School"{{$item->facility_name =='School' ? 'selected':''}}>School</option>
                                                        <option value="Entertainment"{{$item->facility_name =='Entertainment' ? 'selected':''}}>Entertainment</option>
                                                        <option value="Pharmacy"{{$item->facility_name =='Pharmacy' ? 'selected':''}}>Pharmacy</option>
                                                        <option value="Airport"{{$item->facility_name =='Airport' ? 'selected':''}}>Airport</option>
                                                        <option value="Railways"{{$item->facility_name =='Railways' ? 'selected': ''}}>Railways</option>
                                                        <option value="Bus Stop"{{$item->facility_name =='Bus Stop' ? 'selected':''}}>Bus Stop</option>
                                                        <option value="Beach"{{$item->facility_name =='Beach' ? 'selected':''}}>Beach</option>
                                                        <option value="Mall"{{$item->facility_name =='Mall' ? 'selected':''}}>Mall</option>
                                                        <option value="Bank"{{$item->facility_name =='Bank' ? 'selected':''}}>Bank</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="distance">Distance</label>
                                                    <input type="text" name="distance[]" id="distance"
                                                        class="form-control" value={{"$item->distance"}}>
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
                                {{-- </div> --}}
@endforeach
<br><br>
<button type="submit" class="btn btn-primary submit">Save Changes</button>




                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


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

    {{-- -------------------------------------end of facilitities------------------------------------------- --}}

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
                    // lowest_price: {
                    //     required: true,
                    // },
                    // max_price: {
                    //     required: true,
                    // },
                    // property_thumbmail: {
                    //     required: true,
                    // },
                    // multi_img: {
                    //     required: true,
                    // },

                },
                messages: {
                    property_name: {
                        required: 'Please Enter Property Name',
                    },
                    property_status: {
                        required: 'Please Enter Property status',
                    },
                    // lowest_price: {
                    //     required: 'Please Enter lowest Price',
                    // },
                    // max_price: {
                    //     required: 'Please Enter maximum price',
                    // },
                    // property_thumbmail: {
                    //     required: 'Please Enter Property thumbmail',
                    // },
                    // multi_img: {
                    //     required: 'Please Enter multiple images',
                    // },


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
    {{-- ------------------------------------ scrript for displaying images ---------------------------------------- --}}
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
    {{-- ------------------------------------ scrript for displaying images ---------------------------------------- --}}
@endsection
