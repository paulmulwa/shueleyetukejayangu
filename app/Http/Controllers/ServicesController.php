<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

public function AllAdminServices(){

    $services = Services::latest()->get();
    return view('backend.aboutus.all_services',compact('services'));
}

public function AddServices(){
    $serv = Services::latest()->get();
            return view('backend.aboutus.add_services', compact('serv'
        ));

    }
    public function StoreServices(Request $request){
        $request->validate([

        'header' => 'required',
        'icon' => 'required',
        'text' => 'required',

    ]);

         Services::insert([
            'header'=> $request->header,
            'icon'=> $request->icon,
            'text'=> $request->text,
         ]);
         $notification = array(
            'message' => 'services created successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('aboutus.all_services')->with($notification);

        }

    public function EditServices($id){
    $services = Services::findOrFail($id);
    return view('backend.aboutus.edit_services',compact('services'));
    }

    public function Updateservices(Request $request){
    $sid = $request->id;
         Services::findOrFail($sid)->update([
            'header' => $request->header,
            'icon' => $request->icon,
            'text' => $request->text

         ]);
         $notification = array(
            'message' => 'services updated successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('aboutus.all_services')->with($notification);
        }
    public function Deleteservices($id){
    Services::findOrFail($id)->delete();

    $notification = array(
        'message' => 'Services Deleted successfully',
        'alert-type' => 'success'
    );
    return redirect()->route('aboutus.all_services')->with($notification);
    }




















}
