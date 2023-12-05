<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightPrice extends Model
{
    use HasFactory;
    public function fcategory(){
        return $this->belongsTo(FlightCategory::class,'flight_category_id','id');
    }
    public function fclass(){
        return $this->belongsTo(FlightClass::class,'flight_class_id','id');
    }
    public function froute(){
        return $this->belongsTo(flightRoute::class,'flight_route_id','id');
    }
}
