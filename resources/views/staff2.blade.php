<div class="page-content" style="margin-top:-35px;">
        <div class="row profile-body">
            <div class="col-md-12 col-xl-12 middle-wrapperr">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Edit Facilities</h6>
                            <form method="post" action="{{ route('update.property.thumbmail') }}" id="myForm"
                                enctype="multipart/form-data">

                                @csrf
                                <input type="hidden" name="id" value="value{{ $property->id }}">
                                @foreach($facilities as $item)
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
                                {{-- </div> --}}
@endforeach


                            </form>
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
