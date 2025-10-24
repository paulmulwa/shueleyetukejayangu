<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PropertyMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class UserContact extends Controller
{
    public function UserContact(Request $request){

        $pid = $request->property_id;
        $aid = $request->agents_id;
        if(Auth::check()){
      PropertyMessage::insert([
      'user_id' => Auth::user()->id,
      'agent_id' => $aid,
      'property_id' => $pid,
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
}
