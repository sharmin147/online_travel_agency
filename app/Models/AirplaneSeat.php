<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirplaneSeat extends Model
{
    use HasFactory;
    public function airplane(){
        return $this->belongsTo(Airplane::class,'airplane_id','id');
    }
    public function flightClass(){
        return $this->belongsTo(FlightClass::class,'flight_class_id','id');
    }
}
