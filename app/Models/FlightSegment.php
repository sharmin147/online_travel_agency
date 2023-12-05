<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlightSegment extends Model
{
    use HasFactory;
    public function airplane(){
        return $this->belongsTo(Airplane::class,'airplane_id','id');
    }
    public function flightRoute(){
        return $this->belongsTo(flightRoute::class,'flight_route_id','id');
    }
    public function cairport(){
        return $this->belongsTo(Ariport::class,'connection_airport','id');
    }
}
