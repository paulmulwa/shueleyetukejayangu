<?php

namespace App\Http\Controllers;

//use index;
use App\Models\User;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\PackagePlan;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

//use Symfony\Component\HttpFoundation\RedirectResponse;



class AdminController extends Controller
{
    public function AdminDashboard(){
return view('admin.index');
    }

 public function AdminLogout(Request $request){
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin Logout Successfully',
            'alert-type' => 'success'
        );

        return redirect('login')->with($notification);
        //return redirect('/admin/login');

    }}
// end of logout method
public function AdminLogin(){
    {
return view('admin.admin_login');


}
}
public function AdminProfile(){
    $id = Auth::user()->id;
    $profileData = User::find($id);
    return view('admin.admin_profile_view', compact('profileData'));


    }
    public function AdminProfileStore(Request $request){
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
@unlink(public_path('uploads/admin_images/' .$data->photo));
//get a unique id YmdHi and extend to a name
$filename = date('YmdHi').$file->getClientOriginalName();
$file->move(public_path('uploads/admin_images'),$filename);
$data['photo'] = $filename;
}

$data->save();
$notification = array(
    'message' => 'Admin Profile Updated Successfully',
    'alert-type' => 'success'
);
return redirect()->back()->with($notification);

    }

    public function AdminChangePassword()
{

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));

}

public function AdminUpdatePassword(Request $request)
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
public function AllAgent()
{
    $allagent = User::where('role', 'agent')->get();
    return view('backend.agentuser.all_agent', compact('allagent'));

}

public function AddAgent()
{
    //$allagent = User::where('role', 'agent')->get();
    return view('backend.agentuser.add_agent');

}
 public function StoreAgent(Request $request){
    User::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,
        'password'=>Hash::make($request->password),
        'role'=>'agent',
        'status'=>'active',

]);

$notification = array(
    'message' => 'Agent Created Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.agent')->with($notification);

}
public function  EditAgent($id)
{
$allagent = User::findOrFail($id);
return view('backend.agentuser.edit_agent', compact('allagent'));
}

public function UpdateAgent(Request $request){
    $user_id = $request->id;
    User::findOrFail($user_id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,

]);

$notification = array(
    'message' => 'Agent Updated Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.agent')->with($notification);

}
public function DeleteAgent($id){
    User::findOrFail($id)->delete();
//}
$notification = array(
    'message' => 'Agent Deleted Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.agent')->with($notification);

}
public function changeStatus(Request $request)
{

    $user = User::find($request->user_id);
    $user->status = $request->status;
    $user->save();
    return response()->json(['success'=>'status changed successfully']);
}

//}

public function AllAdmin()
{
    $alladmin = User::where('role', 'admin')->get();
    return view('backend.pages.admin.all_admin', compact('alladmin'));

}

public function AddAdmin()
{
    $roles = Role::all();
    return view('backend.pages.admin.add_admin', compact('roles'));

}
 public function StoreAdmin(Request $request){
    // User::insert([
        $user = new User();
        $user->name = $request->name;
        $user->email= $request->email;
        $user->phone= $request->phone;
        $user->address= $request->address;
        $user->password = Hash::make($request->password);
        $user->role ='admin';
        $user->status= 'active';
        $user->save();


if($request->roles)
{
    $user->assignRole($request->roles);
}

$notification = array(
    'message' => 'Uer Created Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.admin')->with($notification);

}



public function  EditAdmin($id)
{
$user = User::findOrFail($id);
$roles = Role::all();
return view('backend.pages.admin.edit_admin', compact('user', 'roles'));
}

public function UpdateAdmin(Request $request){
    $user_id = $request->id;
    User::findOrFail($user_id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,

]);

$notification = array(
    'message' => 'User Updated Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.admin')->with($notification);

}
public function DeleteAdmin($id){
    User::findOrFail($id)->delete();
//}
$notification = array(
    'message' => 'User Deleted Successfully',
    'alert-type' => 'success'
);
return redirect()->route('all.admin')->with($notification);

}














 }


//}
