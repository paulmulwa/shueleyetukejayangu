<?php

namespace App\Http\Controllers\Agent;

use App\Models\User;
//use App\Http\Controllers\Controller;
use App\Models\State;
//use App\Models\User;
use App\Models\Facility;
use App\Models\Property;
use App\Models\Schedule;
use App\Models\Amenities;
//use App\Mail\ScheduleMail;
//use Illuminate\Http\Request;
use App\Mail\ScheduleMail;
use App\Models\MultiImage;
use App\Models\PackagePlan;
//use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\PropertyType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PropertyMessage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//use App\Mail\ScheduleMail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use Haruncpi\LaravelIdGenerator\IdGenerator;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use App\Http\Controllers\Backend\Facility;
//use Haruncpi\LaravelIdGenerator\IdGenerator;

class AgentPropertyController extends Controller
{
    public function AgentAllProperty(){
        $id = Auth::user()->id;
        $property = Property::where('agent_id',$id)->latest()->get();
        return view('agent.property.all_property', compact('property'));
    }
    public function AgentAddProperty(){
        $propertytype = PropertyType::latest()->get();
        $amenities = Amenities::latest()->get();
        $pstate = State::latest()->get();

        $id = Auth::user()->id;
        $property = User::where('role', 'agent')->where('id',$id)->first();

        $pcount = $property->credit;
        if($pcount == 1 || $pcount == 7)
        {
            return redirect()->route('buy.package');
        }
        else{

            return view('agent.property.add_property', compact('propertytype',
            'amenities','pstate' ));



        }



        }

        public function AgentStoreProperty(Request $request)
        {
        $id = Auth::user()->id;
        $uid = User::findOrFail($id);
        $nid = $uid->credit;
        $amen = $request->amenities_id;
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
        'agent_id' => Auth::user()->id,
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

User::where('id', $id)->update([
'credit' => DB::raw('1+'.$nid),
]);

        $notification = array(
            'message' => 'Property Inserted Succesffully',
            'alert-type' => 'success'
        );
        return redirect()->route('agent.all.property')->with($notification);
        }
        //}
        //}

        public function AgentEditProperty($id){
        $facilities = Facility::where('property_id', $id)->get();//using variable facilities access the facility
        //model and get all contents where propertyid and the requested id (id)are the same
        $property = Property::findOrFail($id);
        $type = $property->amenities_id;
        $pstate = State::latest()->get();
        $multiImage = MultiImage::where('property_id',$id)->get();
        $property_ami = explode(",", $type);
        $propertytype = PropertyType::latest()->get();
        $amenities = Amenities::latest()->get();
        return view('agent.property.edit_property',
         compact('property','propertytype',
          'amenities','multiImage' ,'pstate', 'property_ami','facilities'));

        //}

        }
        public function AgentUpdateProperty(Request $request){
        $amen = $request->amenities_id;
        // $amen = $request->amenities_name;

        $amenities = implode(",", $amen);

            $property_id = $request->id;
            Property::findOrFail($property_id)->update([
                    'ptype_id' => $request->ptype_id,
                    // 'ptype_id' => $request->ptype_id,
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
                    'agent_id' => Auth::user()->id,
                    'updated_at'  =>  Carbon::now(),

                   // ]);

            ]);

            $notification = array(
                'message' => 'Property Updated Succesffully',
                'alert-type' => 'success'
            );
            return redirect()->route('agent.all.property')->with($notification);
            }

        public function AgentUpdatePropertyThumbmail(Request $request)
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
        return redirect()->route('agent.all.property')->with($notification);
        }
        public function AgentUpdatePropertyMultiimage(Request $request){

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
            return redirect()->route('agent.all.property')->with($notification);
            }

        public function AgentPropertyMultiImageDelete($id){
            $oldImg = MultiImage::findOrFail($id);
            unlink($oldImg->photo_name);
            MultiImage::findOrFail($id)->delete();

            $notification = array(
                'message' => 'Multiimage deleted Succesffully',
                'alert-type' => 'success'
            );
            return redirect()->route('agent.all.property')->with($notification);
            }

            public function AgentStoreNewMultiimage(Request $request){
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
            return redirect()->route('agent.all.property')->with($notification);
            }
            public function AgentUpdatePropertyFacilities(Request $request){
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
        return redirect()->route('agent.all.property')->with($notification);
            }
         }
        // }
        //deleting the property
        public function AgentDeleteProperty($id){
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
             return redirect()->route('agent.all.property')->with($notification);
        }


        public function AgentDetailsProperty($id){
            $facilities = Facility::where('property_id', $id)->get();//using variable facilities access the facility
            //model and get all contents where propertyid and the requested id (id)are the same
            $property = Property::findOrFail($id);
            $type = $property->amenities_id;
            $multiImage = MultiImage::where('property_id',$id)->get();
            $property_ami = explode(",", $type);
            $propertytype = PropertyType::latest()->get();
            $amenities = Amenities::latest()->get();
            return view('agent.property.details_property',
             compact('property','propertytype',
              'amenities','multiImage' , 'property_ami','facilities'));

            }
            public function AgentInactiveProperty(Request $request)
            {
        $pid = $request->id;
        Property::findOrFail($pid)->update([
        'status' => 0,
        ]);

        $notification = array(
            'message' => 'Property Inactive Succesffully',
           'alert-type' => 'success'
        );
        return redirect()->route('agent.all.property')->with($notification);
        }
        public function AgentActiveProperty(Request $request)
        {
        $pid = $request->id;
        Property::findOrFail($pid)->update([
        'status' => 1,
        ]);

        $notification = array(
        'message' => 'Property Active Succesffully',
        'alert-type' => 'success'
        );
        return redirect()->route('agent.all.property')->with($notification);
        }

        public function BuyPackage(){
            return view('agent.package.buy_package');
        }
        public function BuyBusinessPlan(){

$id = Auth::user()->id;
$data = User::find($id);
return view('agent.package.business_plan', compact('data'));
        }

        public function StoreBusinessPlan(Request $request)
        {
            $id = Auth::user()->id;
            $uid = User::findOrFail($id);
            $nid = $uid->credit;

// $id = Auth::user()->id;
PackagePlan::insert([
'user_id' => $id,
'package_name' => 'Business',
'package_credits' => '3',
//EASy real state random code from 1
'invoice' => 'ERS'.mt_rand(10000000,99999999),
'package_amount' => '20',
'created_at' => Carbon::now(),

// 'package_name' => 'Business',

]);

User::where('id', $id)->update([
'credit' => DB::raw('3 +'.$nid),
]);

$notification = array(
    'message' => 'You have purchased Basic Package Succesffully',
    'alert-type' => 'success'
    );
    return redirect()->route('agent.all.property')->with($notification);
    }

    public function BuyProfessionalPlan(){

        $id = Auth::user()->id;
        $data = User::find($id);
        return view('agent.package.professional_plan', compact('data'));
                }

                public function StoreProfessionalPlan(Request $request)
                {
                    $id = Auth::user()->id;
                    $uid = User::findOrFail($id);
                    $nid = $uid->credit;

        // $id = Auth::user()->id;
        PackagePlan::insert([
        'user_id' => $id,
        'package_name' => 'professional',
        'package_credits' => '10',
        //EASy real state random code from 1
        'invoice' => 'ERS'.mt_rand(10000000,99999999),
        'package_amount' => '50',
        'created_at' => Carbon::now(),

        // 'package_name' => 'Business',

        ]);

        User::where('id', $id)->update([
        'credit' => DB::raw('10 +'.$nid),
        ]);

        $notification = array(
            'message' => 'You have purchased Professional Package Succesffully',
            'alert-type' => 'success'
            );
            return redirect()->route('agent.all.property')->with($notification);
            }

public function AgentPackageHistory()
{
    $id = Auth::user()->id;
    $packagehistory = PackagePlan::where('user_id',$id)->get();

    return view('agent.package.package_history', compact('packagehistory'));
}


public function AgentPackageInvoice($id)
{
   $packagehistory = PackagePlan::where('id', $id)->first();
    // use Barryvdh\DomPDF\Facade\Pdf;
    $pdf = Pdf::loadView('agent.package.package_history_invoice',
    compact('packagehistory'))->setPaper('a4')->setOption([
        'tempDir' => public_path(),
        'chroot' => public_path(),
    ]);
    return $pdf->download('invoice.pdf');
}
//////Agent Details message////

public function AgentDetails($id){
    $agent = User::findOrFail($id);
    //using var property get all items from property model get items
    //where the agent id and id are equal
    $property = Property::where('agent_id', $id)->get();
    //using var featured get all items from property model get items
    //where the featurd colum whetee the vlue is active or is 1
    $featured= Property::where('featured', '1')->limit(3)->get();
    $rentproperty = Property::where('property_status', 'rent')->get();
    $buyproperty = Property::where('property_status', 'buy')->get();


    return view('frontend.agent.agent_details', compact('agent','buyproperty', 'property','rentproperty', 'featured'));


        }


    /////////////////////////////AGENT MESSAGE///////////////////////////////////////////////////////////////


    public function AgentDetailsMessage(Request $request){

        $aid = $request->agents_id;
        if(Auth::check()){
      PropertyMessage::insert([
      'user_id' => Auth::user()->id,
      'agent_id' => $aid,
      'msg_name' => $request->msg_name,
      'msg_email' => $request->msg_email,
      'msg_phone' => $request->msg_phone,
      'message' => $request->message,
      'created_at' => Carbon::now(),

    ]);

    // }else{
      $notification = array(
          'message' => 'send Message successfully',
          'alert-type' => 'success'
      );
    return redirect()->back()->with($notification);

    //}

        }else{
          $notification = array(
              'message' => 'Plz Login first',
              'alert-type' => 'error'
          );
    return redirect()->back()->with($notification);

        }

}


public function AgentScheduleRequest(){

$id = Auth::user()->id;
//when agent id is matched with authenticsated requested id get id
$usermsg = Schedule::where('agent_id', $id)->get();
return view('agent.schedule.schedule_request', compact('usermsg'));



    }

public function AgentDetailsSchedule($id){
$schedule = Schedule::findOrFail($id);
return view('agent.schedule.schedule_details', compact('schedule'));


    }
    public function AgentUpdateSchedule(Request $request){
    $sid = $request->id;
    Schedule::findOrFail($sid)->update([
        'status' => '1',
    ]);

$sendmail = Schedule::findOrFail($sid);
$data = [
    'tour_date' => $sendmail->tour_date,
    'tour_time' => $sendmail->tour_time,

];

///@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@2222222
//CONFIRM FIRST
Mail::to($request->email)->send(new ScheduleMail($data));
///@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@2222222
//CONFIRM FIRST


    $notification = array(
        'message' => 'Schedule Confirmed successfully',
        'alert-type' => 'success'
    );
  return redirect()->route('agent.schedule.request')->with($notification);


    }

}

