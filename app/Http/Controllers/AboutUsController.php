<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    //
    public function AboutUs()
    {
    $abt = AboutUs::all();
    return view('frontend.aboutus.aboutus', compact('abt'));

}
// public function AllAdminAboutUs(){
//     $allabt = AboutUs::all();
//     return view('backend.aboutus.all_aboutus', compact('allabt'));
//     // all.admin.aboutus
// }


public function AllAdminAboutUs(){
        $allabt = AboutUs::find(1);
        return view('backend.aboutus.all_aboutus',compact('allabt'));
    }




//////////////new
public function AdminUpdateAboutUs(Request $request)
{
    $about_id = $request->id;
    if($request->file('photo'))
    {

        $image = $request->file('photo');
        $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(440,570)->save('uploads/images/'.$name_gen);
        $save_url = 'uploads/images/'.$name_gen;
    // )
    // );
//};
AboutUs::findOrFail($about_id)->update([
        'toptext' => $request->toptext,
        'year' => $request->year,
        'descp' => $request->descp,
        'descp1' => $request->descp1,
        'descp2' => $request->descp2,
        'tprof' => $request->tprof,
        'tpsell' => $request->tpsell,
        'tprent' => $request->tprent,
        'tcust' => $request->tcust,
        'photo' => $save_url,
]);

$notification = array(
'message' => ' Site setting Updated Succesffully',
'alert-type' => 'success'
);
return redirect()->route('aboutus.all_aboutus')->with($notification);


    }
    // else{

        AboutUs::findOrFail($about_id)->update([
            'toptext' => $request->toptext,
            'year' => $request->year,
            'descp' => $request->descp,
            'descp1' => $request->descp1,
            'descp2' => $request->descp2,
            'tprof' => $request->tprof,
            'tpsell' => $request->tpsell,
            'tprent' => $request->tprent,
            'tcust' => $request->tcust,
            ]);

            $notification = array(
            'message' => ' Site setting Updated Without Image Succesffully',
            'alert-type' => 'success'
            );
            return redirect()->route('aboutus.all_aboutus')->with($notification);

                }
            }

//////////////////endnew




//}
