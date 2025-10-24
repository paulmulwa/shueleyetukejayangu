<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserContact;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PropertyMessage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserContactController extends Controller
{
    public function UserContact(Request $request){

        $pid = $request->property_id;
        $aid = $request->agents_id;
        if(Auth::check()){
      UserContact::insert([
    //   'id' => Auth::user()->id,
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'subject' => $request->subject,
      'message' => $request->message,
      'created_at' => Carbon::now(),

  ]);

  // }else{
      $notification = array(
          'message' => 'Message Sent successfully',
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


public function AdminUsermessage(){

    $umessage = UserContact::latest()->get();
    $user= User::latest()->get();
    return view('backend.contacts.all_contacts',compact('umessage', 'user'));
}
// public function DetailsUser(){


// }




public function DeleteUser($id){
    $user = User::findOrFail($id);
    UserContact::findOrFail($id)->delete();
    $notification = array(
             'message' => 'Contacts Deleted Succesffully',
            'alert-type' => 'success'
        );
         return redirect()->back()->with($notification);
    }


    public function DetailsUser($id){
        //model and get all contents where propertyid and the requested id (id)are the same
        $user = User::findOrFail($id);
        $cont = UserContact::latest()->get();
        return view('backend.contacts.details_contacts',
         compact('user','cont'));

        }
    }































//}

   // }