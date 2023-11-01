<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Schedule;

//use App\Http\Controllers\UserController;


class UserController extends Controller
{
 public function Index(){
return view('frontend.index');

 }

public function UserProfile(){
    $id =Auth::user()->id;
    $userData = User::find($id);
    return view('frontend.dashboard.edit_profile', compact('userData'));
}

public function UserProfileStore(Request $request){
    $id = Auth::user()->id;//checking if authenticated user is login in
    $data = User::find($id);//$data is  checks in the usertable for the id
    // $data->username = $request->username;
    $data->name = $request->name;
    $data->email = $request->email;
    $data->phone = $request->phone;
    $data->address = $request->address;
//requesting image

    if($request->file('photo'))
{
$file = $request->file('photo');
@unlink(public_path('uploads/user_images/' .$data->photo));
//get a unique id YmdHi and extend to a name
$filename = date('YmdHi').$file->getClientOriginalName();
$file->move(public_path('uploads/user_images'),$filename);
$data['photo'] = $filename;
}

$data->save();
$notification = array(
'message' => 'Admin Profile Updated Successfully',
'alert-type' => 'success'
);
return redirect()->back()->with($notification);

}

public function UserLogout(Request $request)
{
 Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        $notification = array(
            'message' => 'Logged out  Successfully',
            'alert-type' => 'success'
        );

        return redirect('/login')->with($notification);
    }
    public function UserChangePassword(){
        return view('frontend.dashboard.change_password');


    }

    public function UserPasswordUpdate(Request $request)
    {
     $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|confirmed'

     ]);
     if(!Hash::check($request->old_password, auth::user()->password)){

         $notification = array(
        'message' => 'Old password Does Not Match',
        'alert-type' => 'error'
    );
    return back()->with($notification);
     }

    //}
    //Update new password
    User::whereId(auth()->user()->id)->update([
        'password' => Hash::make($request->new_password)

    ]);

    $notification = array(
        'message' => 'Password Change Successfully',
        'alert-type' => 'success'
    );
    return back()->with($notification);

    }
public function UserScheduleRequest(){

$id = Auth::user()->id;
$userData = User::find($id);
$srequest = Schedule::where('user_id',$id)->get();
return view('frontend.message.schedule_request', compact('userData', 'srequest'));

}
public function LiveChat(){

$id = Auth::user()->id;
$userData = User::find($id);
return view('frontend.dashboard.live_chat', compact('userData'));

}




    }

