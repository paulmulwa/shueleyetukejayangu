<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
//use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function AllBanner(){
        $banner = Banner::latest()->get();
        return view('backend.banner.all_banner',compact('banner'));
    } // End Method

 public function AddBanner(){
            return view('backend.banner.add_banner');
    }// End Method

     public function StoreBanner(Request $request){

        $image = $request->file('banner_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(768,450)->save('uploads/banner/'.$name_gen);
        $save_url = 'uploads/banner/'.$name_gen;

        Banner::insert([
            'banner_title' => $request->banner_title,
            'short_title' => $request->short_title,
            'banner_image' => $save_url,
        ]);

       $notification = array(
            'message' => 'Banner Inserted Successfully',
            'alert-type' => 'info'
        );

        return view('backend.banner.all_banner')->with($notification);

    }// End Method


     public function EditBanner($id){
        $banner = Banner::findOrFail($id);
        return view('backend.banner.banner_edit',compact('banner'));
    }// End Method


    public function UpdateBanner(Request $request){

        $banner_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('banner_image')) {

        $image = $request->file('banner_image');
         $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(768,450)->save('uploads/banner/'.$name_gen);
        $save_url = 'uploads/banner/'.$name_gen;

        if (file_exists($old_img)) {
           unlink($old_img);
        }

        Banner::findOrFail($banner_id)->update([
            'banner_title' => $request->banner_title,
            'short_title' => $request->short_title,
            'banner_image' => $save_url,
        ]);

       $notification = array(
            'message' => 'Banner Updated with image Successfully',
            'alert-type' => 'success'
        );

        return view('backend.banner.all_banner')->with($notification);

        } else {

            Banner::findOrFail($banner_id)->update([
            'banner_title' => $request->banner_title,
            'short_title' => $request->short_title,
        ]);

       $notification = array(
            'message' => 'Banner Updated without image Successfully',
            'alert-type' => 'success'
        );

        return view('backend.banner.all_banner')->with($notification);

        } // end else

    }// End Method




    public function DeleteBanner($id){

        $banner = Banner::findOrFail($id);
        $img = $banner->banner_image;
        unlink($img );

        Banner::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Banner Deleted Successfully',
            'alert-type' => 'success'
        );

        return view('backend.banner.all_banner')->with($notification);

    }// End Method




}


