<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public function flight(){
        return $this->belongsTo(FlightSegment::class,'flight_id','id');
    }
    public function sclass(){
        return $this->belongsTo(FlightClass::class,'flight_class_id','id');
    }
}
