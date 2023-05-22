<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $guarded=[];

    public function branch(){
        return $this->belongsTo(Branch::class);
    }
}
