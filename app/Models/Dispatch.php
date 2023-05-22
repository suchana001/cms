<?php

namespace App\Models;

use App\Models\Cargo;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dispatch extends Model
{
    protected $guarded=[];
    
    public function booking(){
        return $this->belongsTo(Booking::class,'booking_id','id');
    }
    public function cargo(){
        return $this->belongsTo(Cargo::class,'cargo_id','id');
    }
}
