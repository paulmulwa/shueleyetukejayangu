<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Models\State;
use App\Models\Facility;
use App\Models\Property;
use App\Models\Amenities;
use App\Models\MultiImage;
use App\Models\PackagePlan;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
///use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
//use App\Http\Controllers\Backend\Facility;
//use Haruncpi\LaravelIdGenerator\IdGenerator;

class PropertyController extends Controller
{
    use HasFactory;

public function AllProperty(){
    //we have a variable called property that is used to get
    //its getting data from property model and its getting the latest data
    $property = Property::latest()->get();
    return view('backend.property.all_property',compact('property'));
}
public function AddProperty(){
$propertytype = PropertyType::latest()->get();
$pstate = State::latest()->get();
$amenities = Amenities::latest()->get();
$activeAgent = User::where('status', 'active')->where('role', 'agent')->latest()->get();
    return view('backend.property.add_property', compact('propertytype',
    'amenities', 'activeAgent', 'pstate'));

}

public function StoreProperty(Request $request)
{
    $amen = $request->amenities_id;

//$amen = $request->amenities_name;
$amenities = implode(",", $amen);
$pcode = IdGenerator::generate(['table'=> 'properties', 'field' => 'property_code', 'length' => 5,
'prefix'=> 'PC']);
$image = $request->file('property_thumbmail');
$name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
Image::make($image)->resize(370,250)->save('uploads/property/thumbmail/'.$name_gen);
$save_url = 'uploads/property/thumbmail/'.$name_gen;
$property_id = Property::insertGetId([
'ptype_id' => $request->ptype_id,
// 'ptype_id' => $request->ptype_id,
'amenities_id' => $amenities,
'property_name' => $request->property_name,
'property_slug' => strtolower(str_replace('', '_', $request->property_name)),
'property_code' => $pcode,
'property_status' => $request->property_status,
'lowest_price' => $request->lowest_price,
'max_price' => $request->max_price,
'short_descp' => $request->short_descp,
'long_descp' => $request->long_descp,
'bedrooms' => $request->bedrooms,
'bathrooms' => $request->bathrooms,
'garage' => $request->garage,
'garage_size' => $request->garage_size,
'property_size' => $request->property_size,
'property_video' => $request->property_video,
'address' => $request->address,
'city' => $request->city,
'state' => $request->state,
'postal_code' => $request->postal_code,
'neighborhood' => $request->neighborhood,
'latitude' => $request->latitude,
'longitude' => $request->longitude,
'featured' => $request->featured,
'hot' => $request->hot,
'agent_id' => $request->agent_id,
'status' => 1,
'property_thumbmail' => $save_url,
'created_at'  =>  Carbon::now(),

]);

$images = $request->file('multi_img');
foreach($images as $img)
{
$make_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
Image::make($img)->resize(770,520)->save('uploads/property/multi-image/'.$make_name);
$uploadPath = 'uploads/property/multi-image/'.$make_name;
MultiImage::insert([
    'property_id' => $property_id,
    'photo_name' => $uploadPath,
    'created_at' => Carbon::now(),

]);
}
$facilities = Count($request->facility_name);
if($facilities != NULL)
{
    for($i=0; $i < $facilities; $i++)
    {
        $fcount = new Facility();
        $fcount->property_id = $property_id;
        $fcount->facility_name = $request->facility_name[$i];
        $fcount->distance = $request->distance[$i];
        $fcount->save();
    }
}
$notification = array(
    'message' => 'Property Inserted Succesffully',
    'alert-type' => 'success'
);
return redirect()->route('all.property')->with($notification);
}
//}
//}

public function EditProperty($id){
$facilities = Facility::where('property_id', $id)->get();//using variable facilities access the facility
//model and get all contents where propertyid and the requested id (id)are the same
$property = Property::findOrFail($id);
$type = $property->amenities_id;
$pstate = State::latest()->get();
$multiImage = MultiImage::where('property_id',$id)->get();
$property_ami = explode(",", $type);
$propertytype = PropertyType::latest()->get();
$amenities = Amenities::latest()->get();
$activeAgent = User::where('status', 'active')->where('role', 'agent')->latest()->get();
return view('backend.property.edit_property',
 compact('property','propertytype',
  'amenities', 'activeAgent','multiImage' ,'pstate', 'property_ami','facilities'));

//}

}
public function UpdateProperty(Request $request){
 $amen = $request->amenities_id;

$amenities = implode(",", $amen);

    $property_id = $request->id;
    Property::findOrFail($property_id)->update([
            'ptype_id' => $request->ptype_id,
            'amenities_id' => $amenities,
            'property_name' => $request->property_name,
            'property_slug' => strtolower(str_replace('', '_', $request->property_name)),
            'property_status' => $request->property_status,
            'lowest_price' => $request->lowest_price,
            'max_price' => $request->max_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'garage' => $request->garage,
            'garage_size' => $request->garage_size,
            'property_size' => $request->property_size,
            'property_video' => $request->property_video,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'postal_code' => $request->postal_code,
            'neighborhood' => $request->neighborhood,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'featured' => $request->featured,
            'hot' => $request->hot,
            'agent_id' => $request->agent_id,
            'updated_at'  =>  Carbon::now(),

           // ]);

    ]);

    $notification = array(
        'message' => 'Property Updated Succesffully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.property')->with($notification);
    }

public function UpdatePropertyThumbmail(Request $request)
{
$pro_id = $request->id;
$oldImage = $request->old_img;
$image = $request->file('property_thumbmail');
$name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
Image::make($image)->resize(370,250)->save('uploads/property/thumbmail/'.$name_gen);
$save_url = 'uploads/property/thumbmail/'.$name_gen;

////removiing old thumbamial nad replacing with the new
if(file_exists($oldImage))
{
    unlink($oldImage);
}
Property::findOrFail($pro_id)->update([
'property_thumbmail'=> $save_url,
'updated_at' => Carbon::now(),

]);

$notification = array(
    'message' => 'Thumbmail Succesffully',
    'alert-type' => 'success'
);
return redirect()->route('all.property')->with($notification);
}
public function UpdatePropertyMultiimage(Request $request){

    $imgs = $request->multi_img;
    foreach($imgs as $id => $img){
        $imgDel = MultiImage::findOrFail($id);
        unlink($imgDel->photo_name);
        $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
        Image::make($img)->resize(770,520)->save('uploads/property/multi-image/'.$make_name);
        $uploadPath = 'uploads/property/multi-image/'.$make_name;
        MultiImage::where('id', $id)->update([
            'photo_name' => $uploadPath,
            'updated_at' => Carbon::now(),

    ]);
    }

    $notification = array(
        'message' => 'Multiimage updated Succesffully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.property')->with($notification);
    }

public function PropertyMultiImageDelete($id){
    $oldImg = MultiImage::findOrFail($id);
    unlink($oldImg->photo_name);
    MultiImage::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Multiimage deleted Succesffully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.property')->with($notification);
    }

    public function StoreNewMultiimage(Request $request){
        $new_multi = $request->imageid;
        $image = $request->file('multi_img');

        $make_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(770,520)->save('uploads/property/multi-image/'.$make_name);
        $uploadPath = 'uploads/property/multi-image/'.$make_name;

        MultiImage::insert([
            'property_id' => $new_multi,
            'photo_name' => $uploadPath,
            'created_at' => Carbon::now(),

    ]);
    //}

    $notification = array(
        'message' => 'Multiimage added Succesffully',
        'alert-type' => 'success'
    );
    return redirect()->route('all.property')->with($notification);
    }
    public function UpdatePropertyFacilities(Request $request){
    $pid = $request->id;
    if($request->facility_name == NULL){
        return redirect()->back();
    }else{

        Facility::where('property_id',$pid)->delete();
        // $facilities = Count($request->facility_name);
 $facilities = Count($request->facility_name);
{
    for($i=0; $i < $facilities; $i++)
    {
        $fcount = new Facility();
        $fcount->property_id = $pid;
        $fcount->facility_name = $request->facility_name[$i];
        $fcount->distance = $request->distance[$i];
        $fcount->save();
    }
}
$notification = array(
    'message' => 'Faciity Inserted Succesffully',
    'alert-type' => 'success'
);
return redirect()->route('all.property')->with($notification);
    }
 }
// }
//deleting the property
public function DeleteProperty($id){
$property = Property::findOrFail($id);
unlink($property->property_thumbmail);
Property::findOrFail($id)->delete();
$image = MultiImage::where('property_id', $id)->get();
foreach($image as $img){
    unlink($img->photo_name);
    MultiImage::where('property_id', $id)->delete();
}
$facilitiesData = Facility::where('property_id',$id)->get();
foreach($facilitiesData as $item){
    $item->facility_name;
    // unlink($img->photo_name);
    Facility::where('property_id', $id)->delete();
}
$notification = array(
         'message' => 'Property Deleted Succesffully',
        'alert-type' => 'success'
    );
     return redirect()->route('all.property')->with($notification);
}


public function DetailsProperty($id){
    $facilities = Facility::where('property_id', $id)->get();//using variable facilities access the facility
    //model and get all contents where propertyid and the requested id (id)are the same
    $property = Property::findOrFail($id);
    $type = $property->amenities_id;
    $multiImage = MultiImage::where('property_id',$id)->get();
    $property_ami = explode(",", $type);
    $propertytype = PropertyType::latest()->get();
    $amenities = Amenities::latest()->get();
    $activeAgent = User::where('status', 'active')->where('role', 'agent')->latest()->get();
    return view('backend.property.details_property',
     compact('property','propertytype',
      'amenities', 'activeAgent','multiImage' , 'property_ami','facilities'));

    }
    public function InactiveProperty(Request $request)
    {
$pid = $request->id;
Property::findOrFail($pid)->update([
'status' => 0,
]);

$notification = array(
    'message' => 'Property Inactive Succesffully',
   'alert-type' => 'success'
);
return redirect()->route('all.property')->with($notification);
}
public function ActiveProperty(Request $request)
{
$pid = $request->id;
Property::findOrFail($pid)->update([
'status' => 1,
]);

$notification = array(
'message' => 'Property Active Succesffully',
'alert-type' => 'success'
);
return redirect()->route('all.property')->with($notification);
}
public function AdminPackageHistory(){
    $packagehistory = PackagePlan::latest()->get();
    return view('backend.package.admin.package_history', compact('packagehistory'));
}

public function AdminPackageInvoice($id)
{
   $packagehistory = PackagePlan::where('id', $id)->first();
    // use Barryvdh\DomPDF\Facade\Pdf;
    $pdf = Pdf::loadView('backend.package.package_history_invoice',
    compact('packagehistory'))->setPaper('a4')->setOption([
        'tempDir' => public_path(),
        'chroot' => public_path(),
    ]);
    return $pdf->download('invoice.pdf');
}
//}















}

//}



