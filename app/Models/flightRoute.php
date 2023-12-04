<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class flightRoute extends Model
{
    use HasFactory;
    public function ari_airport(){
        return $this->belongsTo(Ariport::class,'arrival_airport','id');
    }
    public function dep_airport(){
        return $this->belongsTo(Ariport::class,'departure_airport','id');
    }
    public function dep_city(){
        return $this->belongsTo(City::class,'departure_city','id');
    }
    public function ari_city(){
        return $this->belongsTo(City::class,'arrival_city','id');
    }
}
