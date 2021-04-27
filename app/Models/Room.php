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




//    public function setStateAttribute($state){


//             $this->attributes['state']= $state;

//     }

    
    // public function setStateAttribute(){
    //     if ($this->attributes['booking_id']) {


    //         $this->attributes['state']= 'booked';


    //     }else{
    //         $this->attributes['state']= 'not booked';
    //     }


    // public function setStateAttribute($roomid){
    //     if (Booking::where('room_id',$roomid)->first()) {


    //         $this->attributes['state']= 'booked';


    //     }else{
    //         $this->attributes['state']= 'not booked';
    //     }
        
        
    // }

    public function images(){
        return $this->morphToMany('App\Models\Image','imageable');
    }
    
}
