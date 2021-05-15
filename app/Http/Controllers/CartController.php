<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public static function index()
    {
        $items = \Cart::getContent();
        return $items;
        // return view("cart.index")->with([
        //     "items" => \Cart::getContent()
        // ]);
    }

    //add item to cart
    public function addRoomToCart(Request $request)
    {
        $id = $request->input('id');
        $room = Room::find($id);
        \Cart::add(array(
            "id" => $room->id,
            "name" => "room for ".$room->guestnumber." Persons",
            "price" => (int)$room->price,
            // "quantity" => $request->qty,
            "quantity" => 1,
            "attributes" => array(),
            "associatedModel" => $room,
        ));
        // return redirect()->route("cart");

    }

    //update item on cart
    // public function updateRoomOnCart(Request $request, Room $room)
    // {
    //     \Cart::update($room->id, array(
    //         'quantity' => array(
    //             'relative' => false,
    //             'value' => $request->qty
    //         ),
    //     ));
    //     return redirect()->route("cart.index");
    // }

    //remove item from cart
    public function removeRoomFromCart(Request $request)
    {
        $id = $request->input('id');
        \Cart::remove($id);
        // return redirect()->route("cart.index");
        // return $room->id;
    }

    public static function clearCart(){
        \Cart::clear();
    }


}
