@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="col-md-12 col-xl-12 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">Edit Property</h6>

                    <form method="POST" action="{{ route('update.property', $property->id) }}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $property->id }}">

                        <div class="row">
                            {{-- Property Name --}}
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Property Name</label>
                                    <input type="text" name="property_name" class="form-control" value="{{ $property->property_name }}" placeholder="Enter property name">
                                </div>
                            </div>

                            {{-- Property Status --}}
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Property Status</label>
                                    <select name="property_status" class="form-select">
                                        <option value="rent" {{ $property->property_status == 'rent' ? 'selected' : '' }}>For Rent</option>
                                        <option value="buy" {{ $property->property_status == 'buy' ? 'selected' : '' }}>For Buy</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Prices --}}
                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Lowest Price</label>
                                    <input type="text" name="lowest_price" class="form-control" value="{{ $property->lowest_price }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group mb-3">
                                    <label class="form-label">Max Price</label>
                                    <input type="text" name="max_price" class="form-control" value="{{ $property->max_price }}">
                                </div>
                            </div>

                            {{-- Thumbnail --}}
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Main Thumbnail</label>
                                    <input type="file" name="property_thumbmail" class="form-control" onchange="mainThamUrl(this)">
                                    <img src="{{ asset($property->property_thumbmail) }}" id="mainThmb" width="100" height="100" class="mt-2">
                                </div>
                            </div>

                            {{-- Multiple Images --}}
                            <div class="col-sm-12">
                                <div class="form-group mb-3">
                                    <label class="form-label">Multiple Images</label>
                                    <input type="file" name="multi_img[]" class="form-control" id="multiImg" multiple>
                                    <div class="row" id="preview_img"></div>
                                </div>
                            </div>
                        </div>

                        {{-- Property Details --}}
                        <div class="row">
                            <div class="col-sm-3">
                                <label>Bedrooms</label>
                                <input type="number" name="bedrooms" class="form-control" value="{{ $property->bedrooms }}">
                            </div>
                            <div class="col-sm-3">
                                <label>Bathrooms</label>
                                <input type="text" name="bathrooms" class="form-control" value="{{ $property->bathrooms }}">
                            </div>
                            <div class="col-sm-3">
                                <label>Garage</label>
                                <input type="text" name="garage" class="form-control" value="{{ $property->garage }}">
                            </div>
                            <div class="col-sm-3">
                                <label>Garage Size</label>
                                <input type="text" name="garage_size" class="form-control" value="{{ $property->garage_size }}">
                            </div>
                        </div>

                        {{-- Location --}}
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>City</label>
                                <input type="text" name="city" class="form-control" value="{{ $property->city }}">
                            </div>
                            <div class="col-sm-4">
                                <label>Postal Code</label>
                                <input type="text" name="postal_code" class="form-control" value="{{ $property->postal_code }}">
                            </div>
                            <div class="col-sm-4">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $property->address }}">
                            </div>
                        </div>

                        {{-- More Info --}}
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>Property Size</label>
                                <input type="text" name="property_size" class="form-control" value="{{ $property->property_size }}">
                            </div>
                            <div class="col-sm-4">
                                <label>Property Video</label>
                                <input type="text" name="property_video" class="form-control" value="{{ $property->property_video }}">
                            </div>
                            <div class="col-sm-4">
                                <label>Neighborhood</label>
                                <input type="text" name="neighborhood" class="form-control" value="{{ $property->neighborhood }}">
                            </div>
                        </div>

                        {{-- Coordinates --}}
                        <div class="row mt-3">
                            <div class="col-sm-6">
                                <label>Latitude</label>
                                <input type="text" name="latitude" class="form-control" value="{{ $property->latitude }}">
                            </div>
                            <div class="col-sm-6">
                                <label>Longitude</label>
                                <input type="text" name="longitude" class="form-control" value="{{ $property->longitude }}">
                            </div>
                        </div>

                        {{-- Dropdowns --}}
                        <div class="row mt-3">
                            <div class="col-sm-4">
                                <label>Property Type</label>
                                <select name="ptype_id" class="form-select">
                                    @foreach ($propertytype as $ptype)
                                    <option value="{{ $ptype->id }}" {{ $ptype->id == $property->ptype_id ? 'selected' : '' }}>
                                        {{ $ptype->type_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label>County</label>
                                <select name="state" class="form-select">
                                    @foreach ($pstate as $state)
                                    <option value="{{ $state->id }}" {{ $state->id == $property->state ? 'selected' : '' }}>
                                        {{ $state->state_name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <label>Agent</label>
                                <select name="agent_id" class="form-select">
                                    @foreach ($activeAgent as $agent)
                                    <option value="{{ $agent->id }}" {{ $agent->id == $property->agent_id ? 'selected' : '' }}>
                                        {{ $agent->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Amenities --}}
                        <div class="col-sm-12 mt-3">
                            <label>Property Amenities</label>
                            <select name="amenities_id[]" class="js-example-basic-multiple form-select" multiple>
                                @foreach ($amenities as $ameni)
                                <option value="{{ $ameni->amenities_name }}" {{ in_array($ameni->amenities_name, $property_ami) ? 'selected' : '' }}>
                                    {{ $ameni->amenities_name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Short & Long Description --}}
                        <div class="col-sm-12 mt-3">
                            <label>Short Description</label>
                            <textarea name="short_descp" class="form-control" rows="3">{!! $property->short_descp !!}</textarea>
                        </div>

                        <div class="col-sm-12 mt-3">
                            <label>Long Description</label>
                            <textarea name="long_descp" class="form-control" id="tinymceExample" rows="6">{!! $property->long_descp !!}</textarea>
                        </div>

                        {{-- Featured & Hot --}}
                        <div class="mt-3">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="featured" class="form-check-input" value="1" {{ $property->featured == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">Featured Property</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input type="checkbox" name="hot" class="form-check-input" value="1" {{ $property->hot == '1' ? 'checked' : '' }}>
                                <label class="form-check-label">Hot Property</label>
                            </div>
                        </div>

                        {{-- Facilities (Dynamic Add/Remove) --}}
                        <hr>
                        <h6>Nearby Facilities</h6>
                        <div class="add_item">
                            @foreach ($multi_facility as $item)
                            <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Facilities</label>
                                        <select name="facility_name[]" class="form-control">
                                            <option value="">Select Facility</option>
                                            @php $facilities = ['Hospital', 'SuperMarket', 'School', 'Entertainment', 'Pharmacy', 'Airport', 'Railways', 'Bus Stop', 'Beach', 'Mall', 'Bank']; @endphp
                                            @foreach($facilities as $f)
                                            <option value="{{ $f }}" {{ $item->facility_name == $f ? 'selected' : '' }}>{{ $f }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Distance</label>
                                        <input type="text" name="distance[]" class="form-control" value="{{ $item->distance }}" placeholder="Distance (Km)">
                                    </div>
                                    <div class="col-md-4" style="padding-top: 25px;">
                                        <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i> Add</span>
                                        <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i> Remove</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        {{-- Hidden Facility Template --}}
                        <div style="visibility: hidden;">
                            <div class="whole_extra_item_add" id="whole_extra_item_add">
                                <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
                                    <div class="row mt-2">
                                        <div class="col-md-4">
                                            <label>Facilities</label>
                                            <select name="facility_name[]" class="form-control">
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
                                        <div class="col-md-4">
                                            <label>Distance</label>
                                            <input type="text" name="distance[]" class="form-control" placeholder="Distance (Km)">
                                        </div>
                                        <div class="col-md-4" style="padding-top: 25px;">
                                            <span class="btn btn-success btn-sm addeventmore"><i class="fa fa-plus-circle"></i> Add</span>
                                            <span class="btn btn-danger btn-sm removeeventmore"><i class="fa fa-minus-circle"></i> Remove</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Submit --}}
                        <hr>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ===================== SCRIPTS ===================== --}}
<script type="text/javascript">
    function mainThamUrl(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#mainThmb').attr('src', e.target.result).width(100).height(100);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).ready(function() {
        var counter = 0;
        $(document).on("click", ".addeventmore", function() {
            var whole_extra_item_add = $("#whole_extra_item_add").html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });
        $(document).on("click", ".removeeventmore", function(event) {
            $(this).closest("#delete_whole_extra_item_add").remove();
            counter -= 1;
        });
    });
</script>

@endsection