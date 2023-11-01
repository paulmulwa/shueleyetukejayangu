<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{

public function AddToWishList(Request $request, $property_id){

if(Auth::check()){
    $exists = Wishlist::where('user_id',
    Auth::id())->where('property_id',$property_id)->first();
    if(!$exists){
        Wishlist::insert([
            'user_id' => Auth::id(),
            'property_id' => $property_id,
            'created_at' => Carbon::now()

        ]);
    return response()->json(['success' => 'Successfully Added on Your Wishlist']);

    }
        else{
    return response()->json(['error' => 'This Property is already added to wishlist']);

        }
    }


else{
        return response()->json(['error'
        => 'First Login to tour Account']);


    }


}



public function UserWishlist(){
$id = Auth::user()->id;///getting id from user model
$userData = User::find($id);//taking
return view('frontend.dashboard.wishlist', compact('userData'));

}
public function GetWishlistProperty(){
    $wishlist = Wishlist::with('property')->where('user_id', Auth::id())->latest()->get();
    // $userData = User::find($id);
    // return view('frontend.dashboard.wishlist', compact('userData'));

    $wishQty = wishlist::count();
    return response()->json(['wishlist' => $wishlist, 'wishQty'=> $wishQty]);
    }

    public function WishlistRemove($id){
        Wishlist::where('user_id', Auth::id())->where('id', $id)->delete();
        return response()->json(['success' => 'Removed Successfully']);


    }



}

//}
