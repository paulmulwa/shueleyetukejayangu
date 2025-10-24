<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
//use App\Http\Controllers\ContactUsController;

class ContactUsController extends Controller
{
    //
//rediretcs us to the page
public function AllContacts(){

    $contact = ContactUs::latest()->get();
    return view('contacts.contacts.all_contacts',compact('contact'));
}
public function FrontContactUs(){

    $contact = ContactUs::latest()->get();
    return view('frontend.contactus.contactus',compact('contact'));
}


public function AddContactUs(Request $request){

         ContactUs::insert([
        'email1'=> $request->email,
        'email2'=> $request->email,
        'phone1' => $request->phone,
        'phone2' => $request->phone,
        'address1' => $request->address,
        'address2' => $request->address,

         ]);

         $notification = array(
            'message' => 'Contacts Inserted Succesffully',
            'alert-type' => 'success'
        );
        return redirect()->route('frontend.contactus.contactus')->with($notification);
        //}


                    }



///adminpart
public function AdminContactUs(){
    $contact = ContactUs::find(1);
    return view("backend.contacts.admin_contact",compact('contact'));

}




    public function UpdateAdminContactUs(Request $request)
    {
        $contact_id = $request->id;


        ContactUs::findOrFail($contact_id)->update([
        'email1'=> $request->email1,
        'email2'=> $request->email2,
        'phone1' => $request->phone1,
        'phone2' => $request->phone1,
        'address1' => $request->address1,
        'address2' => $request->address2,
    ]);

    $notification = array(
    'message' => ' Contacts Updated Succesffully',
    'alert-type' => 'success'
    );
    return redirect()->back()->with($notification);


        }

             }


/////adminpart















