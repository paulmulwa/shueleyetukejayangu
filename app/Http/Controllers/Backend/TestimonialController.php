<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{

    public function AllTestimonials(){
$testimonial = Testimonial:: latest()->get();
//geting all data fro testimonials model
return view('backend.testimonial.all_testimonial', compact('testimonial'));

    }
    public function AddTestimonials(){
        return view('backend.testimonial.add_testimonial');
    }
    //
    public function StoreTestimonials(Request $request){

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(370,250)->save('uploads/testimonials/'.$name_gen);
        $save_url = 'uploads/testimonials/'.$name_gen;

Testimonial::insert([
'name' => $request->name,
'message' => $request->message,
'position' => $request->position,
'image' => $save_url,
]);

$notification = array(
'message' => 'Testimonials Inserted Success ffully',
'alert-type' => 'success'
);
return redirect()->route('all.testimonials')->with($notification);
//}


        }


public function EditTestimonials($id)
{
$testimonials = Testimonial::findOrFail($id);
return view('backend.testimonial.edit_testimonials', compact('testimonials'));
}
public function UpdateTestimonials(Request $request)
{
$test_id = $request->id;
if($request->file('image')){



    $image = $request->file('image');
    $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
    Image::make($image)->resize(500,500)->save('uploads/testimonials/'.$name_gen);
    $save_url = 'uploads/testimonials/'.$name_gen;

Testimonial::findOrFail($test_id)->update([
'name' => $request->name,
'position' => $request->position,
'message' => $request->message,
'image' => $save_url,
]);

$notification = array(
'message' => ' Updated Succesffully',
'alert-type' => 'success'
);
return redirect()->route('all.testimonials')->with($notification);


}
else{

    Testimonial::findOrFail($test_id)->update([
        'name' => $request->name,
        // 'state_image' => $save_url,
        ]);

        $notification = array(
        'message' => ' Updated  Succesffully',
        'alert-type' => 'success'
        );
        return redirect()->route('all.testimonials')->with($notification);
            }
        }
public function DeleteTestimonials($id){
$testimonial = Testimonial::findOrFail($id);
$img = $testimonial->image;
 unlink($img);

 Testimonial::findOrFail($id)->delete();
 $notification = array(
    'message' => ' Deleted Succesffully',
    'alert-type' => 'success',
    );
    return redirect()->back()->with($notification);
        }
    }
















//}
