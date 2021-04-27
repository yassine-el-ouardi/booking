<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    public function rooms(){
        return $this->belongsToMany('App\Models\Room');
    }
    
    public function reservationguest(){
        return $this->belongsTo('App\Models\Reservationguest');
    }
}
