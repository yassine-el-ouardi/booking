<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    
    public function listHotelsInCity2(Request $request){
        $citycode = City::where('ville',$request->city)->firstOrFail()->id;
        $hotels = Hotel::with('city')->where('city_id',$citycode)->get();
        return $hotels;
    }

    public function listhotel(){
        $hotel = Hotel::with('cities');
    }

    public function listAllHotels(){
        $hotels = DB::select('SELECT h.id,h.name,h.Address,h.city_id,h.codepostal,h.phone,h.stars, h.description, h.main_price,h.drive_image,c.ville FROM hotels h, cities c WHERE h.city_id=c.id
        ');
        return $hotels;
    }
    // DB::select('SELECT h.id,h.name,h.Address,h.city_id,h.codepostal,h.phone,h.stars, h.description, h.main_price,h.drive_image,c.ville FROM hotels h, cities c WHERE h.city_id=? and h.city_id=c.id
    //     ',[$citycode]);

    public function listAllCities(Request $request){
        $cities = City::all()->sortBy($request->sort);
        return response()->json($cities);
    }

    public function listHotelsInCity(Request $request){
        $rooms = Room::with('bookings')->whereHas('bookings',function($q) use ($request){
            $q->where('from', '>=', $request->to)->orWhere('to', '<=', $request->from);
        })->orWhereDoesntHave('bookings')->get();
        $hotels = collect();
            foreach($rooms as $room){
                if($room->hotel->city->ville  == $request->city){
                $hotels->push($room->hotel);
            }
            }
            $hotels = $hotels->unique();
            return $hotels;
    }

    public function RoomsFromHotel(Request $request){
        $rooms = Room::with('bookings')->whereHas('bookings',function($q) use ($request){
            $q->where('from', '>=', $request->to)->orWhere('to', '<=', $request->from);
        })->orWhereDoesntHave('bookings')->get();
        $rooms2 = collect();
            foreach($rooms as $room){
                if($room->hotel->id  == $request->id){
                $rooms2->push($room);
            }
            }
            $hotels = $rooms2->unique();
            return $hotels;
    }

    public function getCities(Request $request){
        $cities = City::where('ville','like',$request->city.'%')->get();
        return $cities;
    }
}