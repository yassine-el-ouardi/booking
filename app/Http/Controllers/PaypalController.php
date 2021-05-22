<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Booking_room;
use App\Models\Guest;
use App\Models\Reservationguest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Srmklive\PayPal\Services\ExpressCheckout;


class PaypalController extends Controller
{



    public function handlePayment(Request $request)
    {

//-------------------------------------------
$N = Cache::get('N');

for ($i=1; $i < $N; $i++) { 

$request->validate([
    'fullname'.$i=>'required',
    'age'.$i=>'required',
    'gender'.$i=>'required',
]);
$guest = new Guest();
$guest->fullname = $request->input('fullname'.$i);
$guest->age = $request->input('age'.$i);
$guest->gender = $request->input('gender'.$i);
$reservationguest = Reservationguest::latest('created_at')->first();
$guest->reservationguest()->associate($reservationguest)->save();
}
//-------------------------------------------
        $data = [];
        $data['items'] = [];

        foreach (\Cart::getContent() as $item) {
            array_push($data['items'], [
                'name' => $item->name,
                'price' => $item->price,
                'desc' => $item->name,
                'qty' => Cache::get('days')
            ]);
        }


        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Commande #{$data['invoice_id']}";
        $data['return_url'] = route('success.payment');
        $data['cancel_url'] = route('cancel.payment');

        $days = Cache::get('days');
        $total = 0;
        foreach ($data['items'] as $item) {
            $total += $item['price'] * $item['qty'];
        }
        $data['total'] = $total;


        $paypalModule = new ExpressCheckout;
        $res = $paypalModule->setExpressCheckout($data);
        $res = $paypalModule->setExpressCheckout($data, true);
        return redirect($res['paypal_link']);
    }
    public function paymentCancel()
    {
        return redirect()->route('home')->with([
            'info' => 'Order canceled'
        ]);
    }

    public function paymentSuccess(Request $request)
    {
        $paypalModule = new ExpressCheckout;
        $response = $paypalModule->getExpressCheckoutDetails($request->token);


        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $booking = new Booking();
            // $booking->reservationguest = ;
            $booking->from = Cache::get('from');
            $booking->to = Cache::get('to');
            $booking->total = Cache::get('total').'$';

            $reservationguest = Reservationguest::latest('created_at')->first();
            $booking->reservationguest()->associate($reservationguest)->save();


            foreach (\Cart::getContent() as $item) {
                Booking_room::create([
                    "booking_id" => $booking->id,
                    "room_id" => $item->associatedModel->id

                ]);
                \Cart::clear();
            }

            Cache::flush();
           }
            return redirect()->route('home')->with([
                'success' => 'Paid successfully'
            ]);
        
            }
}
