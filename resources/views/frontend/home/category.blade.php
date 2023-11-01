


@php
    $ptype = App\Models\PropertyType::latest()->limit(5)->get();
    //getting all the data from property type model
@endphp
<section class="category-section centred">
    <div class="auto-container">
        <div class="inner-container wow slideInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms"  style="mt-10">
            <ul class="category-list clearfix">
@foreach($ptype as $item)
@php
    $property = App\Models\Property::where('ptype_id', $item->id)->get();
    //using the  var property we are acessing the property model and getting the ptype_id
    //check where ptype id  from property type model is similar id with the  id from the property model
    //to add all records together where ptype_id and id are same you use count
@endphp

                <li>
                    <div class="category-block-one" >
                        <div class="inner-box">
                            <div class="icon-box"><i class="{{ $item->type_icon}}"></i></div>
                            <h5><a href="{{ route('property.type', $item->id) }}">{{ $item->type_name }}</a></h5>
                            <span>{{ count($property) }}</span>
                        </div>
                    </div>
                </li>
                <li>
                    @endforeach
                    {{-- <div class="category-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-2"></i></div>
                            <h5><a href="property-details.html">Commercial</a></h5>
                            <span>20</span>
                        </div>
                    </div> --}}
                {{-- </li>
                <li> --}}
            </ul>
            <div class="more-btn"><a href="categories.html" class="theme-btn btn-one">All Categories</a></div>
        </div>
    </div>
</section>
