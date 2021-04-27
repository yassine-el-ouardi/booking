<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable=['hotel_id','booking_id','floor','roomnumber','description','guestnumber'];

    public function hotel(){
        return $this-> belongsTo('App\Models\Hotel');
    }

    public function booking(){
        return $this->belongsTo('App\Models\Booking');
    }

    public function setStateAttribute(){
        if ($this->attributes['booking_id']) {


            $this->attributes['state']= 'booked';


        }else{
            $this->attributes['state']= 'not booked';
        }
        
        
    }
}
