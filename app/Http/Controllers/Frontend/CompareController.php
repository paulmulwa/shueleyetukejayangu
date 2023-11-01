<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Compare;
use Illuminate\Http\Request;
//use App\Models\Compare;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompareController extends Controller
{     

///////////////////////////////startnew/////////////////////////////////////////////////////////

public function AddToCompare(Request $request, $property_id){

    if(Auth::check()){
        $exists = Compare::where('user_id',
        Auth::id())->where('property_id',$property_id)->first();
        if(!$exists){
            Compare::insert([
                'user_id' => Auth::id(),
                'property_id' => $property_id,
                'created_at' => Carbon::now()
    
            ]);
        return response()->json(['success' => 'Successfully Added on Your Compare']);
    
        }
            else{
        return response()->json(['error' => 'This Property is already added to Compare']);
    
            }
        }
    
    
    else{
            return response()->json(['error'
            => 'First Login to tour Account']);
    
    
        }
    
    
    }
    
    
    
    public function UserCompare(){
    $id = Auth::user()->id;///getting id from user model
    $userData = User::find($id);//taking
    return view('frontend.dashboard.compare');
    
    }
    public function GetCompareProperty(){
        // to access the property table we use a relationship and use property as a var to access 
        //the table properties tbale na d get data from  it
        $compare = Compare::with('property')->where('user_id', Auth::id())->latest()->get();
        return response()->json($compare);
        }
    
        public function CompareRemove($id){
            Compare::where('user_id', Auth::id())->where('id', $id)->delete();
            return response()->json(['success' => 'Removed Successfully']);
    
    
        }
    
    
    
    }
    
//}
    