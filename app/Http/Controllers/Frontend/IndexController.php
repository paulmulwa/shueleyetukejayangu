<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Facility;

// use App\Models\Facility;
use App\Models\MultiImage;
use App\Models\Property;
use App\Models\PropertyMessage;
use App\Models\PropertyType;
use App\Models\Schedule;
use App\Models\State;
use App\Models\Subscribers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Frontend\IndexController;
// use App\Models\Amenities;
// use App\Models\MultiImage;
// use App\Models\PackagePlan;
// use App\Models\PropertyType;
// use Illuminate\Http\Request;
// use Illuminate\Support\Carbon;
// use Barryvdh\DomPDF\Facade\Pdf;
// ///use Haruncpi\LaravelIdGenerator\IdGenerator;
// use App\Http\Controllers\Controller;
 //use Intervention\Image\Facades\Image;
// use Haruncpi\LaravelIdGenerator\IdGenerator;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
// //use App\Http\Controllers\Backend\Facility;
// //use Haruncpi\LaravelIdGenerator\IdGenerator;

class IndexController extends Controller
{
    public function FeaturedPropertyDetails($id, $slug){
    $property = Property::findOrFail($id);
    $multiimage = MultiImage::where('property_id', $id)->get();
    $amenities = $property->amenities_id;
    $facility = Facility::where('property_id',$id)->get();
    $type_id = $property->ptype_id;
    $relatedProperty = Property::where('ptype_id',$type_id)->where('id','!=',$id)->orderBy('id', 'DESC')->limit(3)->get();
    $property_amen = explode(',',$amenities);

    return view('frontend.property.property_details',
    compact('property','multiimage',
     'property_amen','facility','relatedProperty'));

    }

    public function PropertyMessage(Request $request){

      $pid = $request->property_id;
      $aid = $request->agents_id;
      if(Auth::check()){
    PropertyMessage::insert([
    'user_id' => Auth::user()->id,
    'agent_id' => $aid,
    'property_id' => $pid,
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

///////////////////////////checkit///////////////////////////
// public function AgentDetails($id){
// $agent = User::findOrFail($id);
// //using var property get all items from property model get items
// //where the agent id and id are equal
// $property = Property::where('agent_id', $id)->get();
// //using var featured get all items from property model get items
// //where the featurd colum whetee the vlue is active or is 1
// $featured= Property::where('featured', '1')->limit(3)->get();
// $rentproperty = Property::where('property_status', 'rent')->get();
// $buyproperty = Property::where('property_status', 'buy')->get();


// return view('frontend.agent.agent_details', compact('agent','buyproperty', 'property','rentproperty', 'featured'));


//     }


// /////////////////////////////AGENT MESSAGE///////////////////////////////////////////////////////////////


// public function AgentDetailsMessage(Request $request){

//     $aid = $request->agents_id;
//     if(Auth::check()){
//   PropertyMessage::insert([
//   'user_id' => Auth::user()->id,
//   'agent_id' => $aid,
//   'msg_name' => $request->msg_name,
//   'msg_email' => $request->msg_email,
//   'msg_phone' => $request->msg_phone,
//   'message' => $request->message,
//   'created_at' => Carbon::now(),

// ]);

// // }else{
//   $notification = array(
//       'message' => 'send Message successfully',
//       'alert-type' => 'success'
//   );
// return redirect()->back()->with($notification);

// //}

//     }else{
//       $notification = array(
//           'message' => 'Plz Login first',
//           'alert-type' => 'error'
//       );
// return redirect()->back()->with($notification);

//     }


// }
////////////////////////////endcheckit
public function RentProperty(){
    //checkimg where a property is a aticve and is of type rent
    // $property = Property::where('status', '1')->where('property_status','rent')->get();
    $property = Property::where('status', '1')->where('property_status','rent')->paginate(3);

return view('frontend.property.rent_property', compact('property'));
  }
  public function BuyProperty(){
    //checkimg where a property is a aticve and is of type buy
    $property = Property::where('status', '1')->where('property_status','buy')->paginate(3);
return view('frontend.property.buy_property', compact('property'));
  }
//   return $users = Users::select('id','name')->paginate(10);



public function PropertyType ($id){

    $property = Property::where('status', '1')->where('ptype_id',$id)->get();
    $pbread = PropertyType::where('id', $id)->first();
    return view('frontend.property.property_type',compact('property','pbread'));

}


public function StateDetails($id){
$property = Property::Where('status', '1')->where('state', $id)->get();
//when state is sam as requested id
$bstate = State::where('id', $id)->first();
return view('frontend.property.state_property',
 compact('property', 'bstate'));

}

public function BuyPropertySearch(request $request){
$request->validate(['search'  => 'required']);
//create a variable and take an id with the var
$item = $request->search;
$sstate = $request->state;
$stype = $request->ptype_id;
//search from property model
$property = Property::where('property_name', 'like', '%'.$item. '%')
->where('property_status', 'buy')->with('type','pstate')->
whereHas('pstate', function($q) use($sstate){
    $q->where('state_name', 'like', '%' .$sstate. '%');
})

->whereHas('type', function($q) use($stype){
    $q->where('type_name', 'like', '%' .$stype. '%');
})
->get();
return view('frontend.property.property_search',compact('property'));



}
public function RentPropertySearch(request $request){
    // $request->validate(['search']);
       $request->validate(['search'  => 'required']);

    //create a variable and take an id with the var
    $item = $request->search;
    $sstate = $request->state;
    $stype = $request->ptype_id;
    //search from property model
    $property = Property::where('property_name', 'like', '%'.$item. '%')
    ->where('property_status', 'rent')->with('type','pstate')->
    whereHas('pstate', function($q) use($sstate){
        $q->where('state_name', 'like', '%' .$sstate. '%');
    })

    ->whereHas('type', function($q) use($stype){
        $q->where('type_name', 'like', '%' .$stype. '%');
    })
    ->get();
    return view('frontend.property.property_search',compact('property'));



    }
///////////////////////ALLPROPERTIES SEARCH//////////////////////////////////
public function AllPropertySearch(request $request){

   $property_status = $request->property_status;
    //create a variable and take an id with the var
    // $item = $request->search;
    $sstate = $request->state;
    $stype = $request->ptype_id;
    $bedrooms = $request->bedrooms;

    //search from property model
    // $property = Property::where('property_name', 'like', '%'.$item. '%')
    // ->where('property_status', 'rent')->with('type','pstate')->
    // whereHas('pstate', function($q) use($sstate){
    //     $q->where('state_name', 'like', '%' .$sstate. '%');
    // })

    // ->whereHas('type', function($q) use($stype){
    //     $q->where('type_name', 'like', '%' .$stype. '%');
    // })
    // ->get();
    // return view('frontend.property.property_search',compact('property'));



    // }
    // $property = Property::where('status' , '1');
    $property = Property::where('status', '1')->
    where('bedrooms', '$bedrooms','like', '%'.$bedrooms. '%')
    ->where('property_status', '$property_status')->with('type','pstate')->
    whereHas('pstate', function($q) use($sstate){
        $q->where('state_name', 'like', '%' .$sstate. '%');
    })

    ->whereHas('type', function($q) use($stype){
        $q->where('type_name', 'like', '%' .$stype. '%');
    })
    ->get();
    return view('frontend.property.property_search',compact('property'));



    }


public function StoreSchedule(Request $request)
{
    $aid = $request->agent_id;
    $pid = $request->property_id;

if(Auth::check()){
Schedule::insert([
'user_id'=> Auth::user()->id,
'agent_id' => $aid,
'property_id' => $pid,
'tour_date' => $request->tour_date,
'tour_time' => $request->tour_time,
'message' => $request->message,
'created_at' => Carbon::now(),

]);

$notification = array(
    'message' => 'Request send successfully',
    'alert-type' => 'success',
);
return redirect()->back()->with($notification);
}else{
    $notification = array(
        'message' => 'plz login first',
        'alert-type' => 'error'
    );
    return redirect()->back()->with($notification);

}
}


public function subscribe(Request $request){
         Subscribers::insert([
        'email'=> $request->email,
         ]);

         $notification = array(
            'message' => 'User Subscribed Succesffully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }



}
