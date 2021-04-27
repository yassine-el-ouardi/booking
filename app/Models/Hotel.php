<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    public function city(){
        return $this->belongsTo('App\Models\City');
    }

    public function images(){
        return $this->morphToMany('App\Models\Image','imageable');
    }
}
