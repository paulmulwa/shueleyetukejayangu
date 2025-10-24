<?php

namespace App\Http\Controllers\Backend;

use App\Models\HomeSlide;
use Illuminate\Http\Request;
use Intervention\Image\Image;
use App\Http\Controllers\Controller;

class HomeSliderController extends Controller
{
    //
    public function HomeSlider(){

        $homeslide = HomeSlide::find(1);
        return view('backend.courasel.allcourasel',compact('homeslide'));

     }
     public function UpdateSlider(Request $request){

        $slide_id = $request->id;

        if ($request->file('home_slide')) {
            $image = $request->file('home_slide');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(636,852)->save('uploads/home_slide/'.$name_gen);
            $save_url = 'uploads/home_slide/'.$name_gen;

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'home_slide' => $save_url,

            ]);
            $notification = array(
            'message' => 'Home Slide Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            HomeSlide::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,

            ]);
            $notification = array(
            'message' => 'Home Slide Updated without Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method



}
 // End Method


