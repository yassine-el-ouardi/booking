<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Hotel;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $cities = City::all()->pluck('ville');

        return view('main.index',compact('cities'));


    }

    public function search(Request $request){
        

        $name = $request->input('name');
        $date = $request->input('time_from');
        $city = $request->input('city');
        $childrenguests = $request->input('childrenguests');     
        $adultguests = $request->input('adultguests');
        $array = explode(" ",$date);
        $from = Carbon::createFromFormat('d-m-Y',$array[0]);
        $to = Carbon::createFromFormat('d-m-Y',$array[2]);



    if ($request->isMethod('POST')) {

        $rooms = Room::with('bookings')->whereHas('bookings',function($q) use ($to,$from){
            $q->where('from', '>=', $to)->orWhere('to', '<=', $from);
        })->orWhereDoesntHave('bookings')->get();

        $hotels = collect();
        foreach($rooms as $room){
            if($room->hotel->city->ville  == $city){
            $hotels->push($room->hotel);
        }
        }

        $hotels = $hotels->unique();
    }
    else{
        $hotels = null; 
    }

    $cities = City::all()->pluck('ville');
        return view('main.hotels',compact('hotels','cities'));



// return $request->input();

// return view('welcome',compact('hotels','rooms'));




    }

    public function welcome(){
        return view('welcome');
    }


    public function hoteldetails(Request $request){

        $id = $request->id;
        $hotel = Hotel::find($id);
        $rooms = Room::with('hotel')->whereHas('hotel',function($q) use($id){
            $q->where('id',$id);
        })->get();

        return view('main.hotel',compact('hotel','rooms'));

    }

    public function test(){
        return view('main.hotel');
    }
}
