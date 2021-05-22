<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\City;




use App\Models\Hotel;
use App\Models\Message;
use App\Models\Reservationguest;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



//     public function __construct(){
//     $this->total = 0;

// }

    public function index(Request $request)
    {
        //
        $rooms = Room::paginate(3);
        $cities = City::all()->pluck('ville');

        return view('main.index',compact('cities','rooms'));


    }

    public function search(Request $request){

    if ($request->isMethod('POST')) {        
            $name = $request->input('name');
            $date = $request->input('time_from');
            $city = $request->input('city');
            $childrenguests = $request->input('childrenguests');     
            $adultguests = $request->input('adultguests');
            $array = explode(" ",$date);
            $from = Carbon::createFromFormat('d-m-Y',$array[0]);
            $to = Carbon::createFromFormat('d-m-Y',$array[2]);
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
        $hotels = collect(); 
    }

    $cities = City::all()->pluck('ville');
        return view('main.hotels',compact('hotels','cities'));

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

        return view('welcome');
    }

    public function roomdetails(Request $request){

        $id = $request->id;
        $room = Room::find($id);
        $hotel = $room->hotel;
        $rooms = Room::with('hotel')->whereHas('hotel',function($q) use($hotel){
            $q->where('id',$hotel->id);
        })->get();
        return view('main.room',compact('room','hotel','rooms'));
    }

    public function rooms(){

            $rooms = Room::paginate(3);
            $N = Room::all()->count();
        return view('main.listingrooms',compact('rooms','N'));
    }


    public function about(){

        $rooms = Room::all()->count();
        $hotels = Hotel::all()->count();
        $bookings = Booking::all()->count();
        $cities = City::all()->count();


        return view('main.about',compact('rooms','hotels','bookings','cities'));
    }

    public function sendMessage(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'subject'=>'required|min:10',
            'message'=>'required|min:10'
        ]);


        $message = new Message($request->all());
        $query = $message->save();

        // return $request->all();

        if($query){
            return redirect()->route('home')->with([
                'success' => 'Message sended'
            ]);;
        }else{
            return redirect()->route('home')->with([
                'fail' => 'something went wrong'
            ]);;
        }

    }


    public function hotels(){

        $hotels = Hotel::paginate(3);
        $N = Hotel::all()->count();
    return view('main.listinghotels',compact('hotels','N'));
}



    public function paymentform(){

        $cities = City::all()->pluck('ville');

        return view('main.form',compact('cities'));
    }

    public function submitpaymentform(Request $request){


                //---------------validation--------------
                $request->validate([
                    'firstname'=>'required',
                    'lastname'=>'required',
                    'address'=>'required',
                    'codepostal'=>'required',
                    'email'=>'required|email',
                    'phone'=>'required',
                    'city'=>'required',
                    'booking-date'=>'required',
                    'childrenguests'=>'required',
                    'adultguests'=>'required'
                ]);
        
                //---------------------------------------

        $date = $request->input('booking-date');
        $array = explode(" ",$date);
        $from = Carbon::createFromFormat('d-m-Y',$array[0]);
        $to = Carbon::createFromFormat('d-m-Y',$array[2]);
        $days = $from->diffInDays($to);
        $childrenguests = $request->input('childrenguests');     
        $adultguests = $request->input('adultguests');
        $N = $childrenguests+$adultguests;

        Cache::put('N',$N);

        Cache::put('from',$from);
        Cache::put('to',$to);
        Cache::put('from',$from);
        Cache::put('days',$days);
        
        $total = 0;
        foreach (\Cart::getContent() as $item) {

            $total += $item['price'] * $days;
        }

        $cities = City::all()->pluck('ville');

        Cache::put('total',$total);

//-----------------------------------------
        $mainguest = new Reservationguest();
        $mainguest->firstname = $request->input('firstname');
        $mainguest->lastname = $request->input('lastname');
        $mainguest->address = $request->input('address');
        $mainguest->codepostal = $request->input('codepostal');
        $mainguest->phone = $request->input('phone');

        $city = $request->input('city');

        $mainguest->city_id = City::where('ville',$city)->get()->first()->id;

        $query = $mainguest->save();
        if($query){
            return view('main.form1',compact('cities','N','total'))->with('success','You have been successfuly registred');
        }else{
            return back()->with('fail','something went wrong');
        }


    }




}
