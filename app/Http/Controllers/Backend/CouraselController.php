<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Courasel;
use App\Models\MultiImage;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Image;

class CouraselController extends Controller
{
    //
    public function Courasel(){

        $car = Courasel::find(1);

        return view('backend.courasel.allcourasel',compact('car'));
    }
    // public function AddCourasel(){
    // $carousel = Courasel::latest()->get();
    //     return view('backend.property.add_property');

    // }

    public function CouraselUpdate(Request $request)
    {
         $car_id = $request->id;
        if($request->file('imageone'))
        {

            $image = $request->file('imageone');
            $name_gen = hexdec(uniqid()). '.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(440,570)->save('uploads/courasel/'.$name_gen);
            $save_url = 'uploads/courasel/'.$name_gen;
        // )
        // );
    //};
    Courasel::findOrFail($car_id)->update([
            'textone' => $request->textone,
            'textwo' => $request->texttwo,
            'textthree' => $request->textthree,
            'photo' => $save_url,
    ]);

    $notification = array(
    'message' => ' Site setting Updated Succesffully',
    'alert-type' => 'success'
    );
    return redirect()->route('backend.courasel.allcourasel')->with($notification);


        }
        else{

            Courasel::findOrFail($car_id)->update([
            'textone' => $request->textone,
            'imageone' => $request->imageone,
            'textwo' => $request->texttwo,
            'imagetwo' => $request->imagetwo,
            'textthree' => $request->textthree,
            'imagethree' => $request->imagethree,
                ]);

                $notification = array(
                'message' => ' Site setting Updated Without Image Succesffully',
                'alert-type' => 'success'
                );
                return redirect()->route('backend.courasel.allcourasel')->with($notification);

                    }
                }
                    public function UpdatePropertyMultiimage(Request $request){

                        $imgs = $request->multi_img;
                        foreach($imgs as $id => $img){
                            $imgDel = MultiImage::findOrFail($id);
                            unlink($imgDel->photo_name);
                            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                            Image::make($img)->resize(770,520)->save('uploads/property/multi-image/'.$make_name);
                            $uploadPath = 'uploads/property/multi-image/'.$make_name;
                            MultiImage::where('id', $id)->update([
                                'photo_name' => $uploadPath,
                                'updated_at' => Carbon::now(),

                        ]);
                        }

                        $notification = array(
                            'message' => 'Multiimage updated Succesffully',
                            'alert-type' => 'success'
                        );
                        return redirect()->route('all.property')->with($notification);
                        }




                }
            //}
