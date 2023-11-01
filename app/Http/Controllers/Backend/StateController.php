<?php

namespace App\Http\Controllers\Backend;

use App\Models\State;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
//use Intervention\Image\Image;
//use Intervention\Image\Image;
use App\Http\Controllers\Controller;

class StateController extends Controller
{
    public function AllState(){
        $state = State::latest()->get();
        return view('backend.state.all_state', compact('state'));
        }
        public function AddState(){
            // $state = State::latest()->get();
            return view('backend.state.add_state', );
            }
        public function StoreState(Request $request){

            $image = $request->file('state_image');
            $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,250)->save('uploads/state/'.$name_gen);
            $save_url = 'uploads/state/'.$name_gen;

State::insert([
'state_name' => $request->state_name,
'state_image' => $save_url,
]);

$notification = array(
    'message' => 'Property Inserted Succesffully',
    'alert-type' => 'success'
);
return redirect()->route('all.state')->with($notification);
//}


            }


public function EditState($id)
{
    $state = State::findOrFail($id);
    return view('backend.state.edit_state', compact('state'));

}
public function UpdateState(Request $request)   
{
    $state_id = $request->id;
    if($request->file('state_image')){



        $image = $request->file('state_image');
        $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,250)->save('uploads/state/'.$name_gen);
        $save_url = 'uploads/state/'.$name_gen;

State::findOrFail($state_id)->update([
'state_name' => $request->state_name,
'state_image' => $save_url,
]);

$notification = array(
'message' => ' Updated  Succesffully',
'alert-type' => 'success'
);
return redirect()->route('all.state')->with($notification);


    }
    else{

        State::findOrFail($state_id)->update([
            'state_name' => $request->state_name,
            // 'state_image' => $save_url,
            ]);

            $notification = array(
            'message' => ' Updated  Succesffully',
            'alert-type' => 'success'
            );
            return redirect()->route('all.state')->with($notification);
                }
            }
public function DeleteState($id){
    $state = State::findOrFail($id);
    $img = $state->state_image;
     unlink($img);

     State::findOrFail($id)->delete();
     $notification = array(
        'message' => ' Deleted Succesffully',
        'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
            }
        }


//}







//}














//}
