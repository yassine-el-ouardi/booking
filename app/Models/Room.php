<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable=['state'];

    public function hotel(){
        return $this-> belongsTo('App\Models\Hotel');
    }

    public function bookings(){
        return $this->belongsToMany('App\Models\Booking');
    }




    
}
