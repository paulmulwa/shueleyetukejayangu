<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class AgentController extends Controller
{
    public function AgentDashboard()
    {
return view('agent.index');
    }

    public function Agentlogin()
    {
return view('agent.agent_login');
    }


    public function AgentRegister(Request $request)
    {
        $user = User::create([
            //*********// every part of this is blocked
            //*********// 'name' => $request->name,
             'name' => $request->name,
            'email' => $request->email,
            //*********// 'phone' => $request->phone,
             'phone' => $request->phone,

            'password' => Hash::make($request->password),
            //*********// 'role' => 'agent',
             'role' => 'agent',

           //********* // 'status' => 'inactive',
             'status' => 'inactive',

        ]);


        //*********// event(new Registered($user));
        //*********// Auth::login($user);
       //********* // return redirect(RouteServiceProvider::AGENT);
       event(new Registered($user));
      Auth::login($user);
    return redirect(RouteServiceProvider::AGENT);

     return view('agent.agent_login');
    }
    public function AgentLogout(Request $request){
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            $notification = array(
                'message' => 'Agent Logout Successfully',
                'alert-type' => 'success'
            );

            return redirect('login')->with($notification);
            //return redirect('/agent/login');
        }
        }
        public function AgentProfile(){
            $id = Auth::user()->id;
            $profileData = User::find($id);
            return view('agent.agent_profile_view', compact('profileData'));


            }
            public function AgentProfileStore(Request $request){
                $id = Auth::user()->id;//checking if authenticated user is login in
                $data = User::find($id);//$data is  checks in the usertable for the id
                // $data->username = $request->username;
                $data->name = $request->name;
                $data->email = $request->email;
                $data->phone = $request->phone;

                $data->address = $request->address;
                // $data->agent_descp = $request->agent_descp ;

        //requesting image

                if($request->file('photo'))
        {
        $file = $request->file('photo');
        @unlink(public_path('uploads/agent_images/' .$data->photo));
        //get a unique id YmdHi and extend to a name
        $filename = date('YmdHi').$file->getClientOriginalName();
        $file->move(public_path('uploads/agent_images'),$filename);
        $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Agent Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

            }

            public function AgentChangePassword()
        {

                $id = Auth::user()->id;
                $profileData = User::find($id);
                return view('agent.agent_change_password', compact('profileData'));

        }

        public function AgentUpdatePassword(Request $request)
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
        public function FrontAllAgents()
        {
            $allagent = User::where('role', 'agent')->get();
            return view('frontend.agents.front_agents', compact('allagent'));

        }

        }




    //}












    // end of logout method

/////hfghg

///fkkff






//}
