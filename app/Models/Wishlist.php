<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function property(){
        //we are getting the property_id from propoerrty model and chacking if
        //its equl to id in the wishlist model
        return $this->belongsTo(Property::class, 'property_id', 'id');
    }

}
