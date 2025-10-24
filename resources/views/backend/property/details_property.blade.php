@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>



    <div class="page-content">

        <nav class="page-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Property Details</a></li>
                <li class="breadcrumb-item active" aria-current="page">Property Details</li>
            </ol>
        </nav>

        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Property Details</h6>
                        {{-- <p class="text-muted mb-3">Add class <code>.table</code></p> --}}
                        <div class="table-responsive">
                            <table class="table table-striped">

                                <tbody>
                                    <tr>
                                        <td>Property Name</td>
                                        <td><code>{{ $property->property_name }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Property Status</td>
                                        <td><code>{{ $property->property_status }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Lowest Price</td>
                                        <td><code>{{ $property->lowest_price }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Maximum Price</td>
                                        <td><code>{{ $property->max_price }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Bedrooms</td>
                                        <td><code>{{ $property->bedrooms }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Bathrooms</td>
                                        </td>
                                        <td><code>{{ $property->bathrooms }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Garage</td>
                                        <td><code>{{ $property->garage }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td><code>{{ $property->address }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>City</td>
                                        <td><code>{{ $property->city }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>State</td>
                                        <td><code>{{ $property->state }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Postal Code</td>
                                        <td><code>{{ $property->postal_code }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Main Image</td>
                                        <td>
                                            <img src="{{ asset($property->property_thumbmail) }}"
                                                style="width: 100px; height:70px">
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>
                                            @if ($property->status == 1)
                                                <span class="badge rounded-pill bg-success">Active</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">Inactive</span>
                                            @endif
                                        </td>

                                        {{-- @endif    </code></td> --}}

                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-title">Property Details</h6>
                        <p class="text-muted mb-3">Add class <code>.table-hover</code></p>
                        <div class="table-responsive">
                            <table class="table table-striped">

                                <tbody>
                                    <tr>
                                        <td>Postal Code</td>
                                        <td><code>{{ $property->postal_code }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Postal Size</td>
                                        <td><code>{{ $property->property_size}}</code></td>
                                    </tr>   <tr>
                                        <td>Postal Video</td>
                                        <td><code>{{ $property->property_video }}</code></td>
                                    </tr>
                                       <tr>
                                        <td>Neighborhood</td>
                                        <td><code>{{ $property->neighborhood }}</code></td>
                                    </tr>
                                    <tr>
                                        {{-- <td>State</td> --}}
                                        {{-- <td><code>{{ $property['state']['state_name'] }}</code></td> --}}
                                        {{-- <td><code>{{ $property['state']['state_name'] }}</code></td> --}}

                                    </tr>



                                    <tr>
                                        <td>Latitude</td>
                                        <td><code>{{ $property->latitude }}</code></td>
                                    </tr>   <tr>
                                        <td>Longitude</td>
                                        <td><code>{{ $property->longitude }}</code></td>
                                    </tr>

                                        <td>Property Amenities</td>
                                        <td><code> <select name="amenities_id[]" class="js-example-basic-multiple form-select"
                                            multiple="multiple" data-width="100%"
                                            value="{{ $property->amenities }}">
                                            {{-- @foreach ($amenities as $ameni)
                                                <option
                                                    value="{{ $ameni->amenities_name}}"
                                                    {{ in_array($ameni->amenities_name, $property_ami)
                                                    ? 'selected' : '' }}>
                                                    {{ $ameni->amenities_name }}
                                                </option>
                                            @endforeach --}}

                                            @foreach ($amenities as $ameni)
                                            <option
                                                value="{{ $ameni->amenities_name }}"{{ in_array($ameni->amenities_name, $property_ami) ? 'selected' : '' }}>
                                                {{ $ameni->amenities_name }}
                                            </option>
                                        @endforeach





                                        </select></code></td>
                                    </tr>
                                    <tr>
                                        <td>Short Description</td>
                                        <td><code>{{ $property->short_descp }}</code></td>
                                    </tr>
                                    <tr>
                                        <td>Agent</td>
                            @if($property->agent_id == NULL)</td>
                            <td><code>Admin</code></td>
                            @else
                            <td><code>{{ $property['user']['name'] }}</code></td>
                          @endif
                                    </tr>


                                </tbody>
                            </table>

<br><br>
@if($property->status == 1)
<form method="post" action="{{ route('inactive.property') }}"
enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$property->id }}">
<button type="submit" class="btn btn-primary">InActive</button>
</form>
@else
<form method="post" action="{{ route('active.property') }}"
enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{$property->id }}">
<button type="submit" class="btn btn-primary">  Active</button>

</form>
{{-- @else --}}
@endif





                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
