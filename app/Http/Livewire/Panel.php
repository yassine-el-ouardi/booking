<?php

namespace App\Http\Livewire;

use App\Models\Room;
use Composer\DependencyResolver\Request;
use Livewire\Component;

class Panel extends Component
{

    public $room_id;

    public function render()
    {
        return view('livewire.panel');
    }

    public function mount($id){


$this->room_id = $id;

        
    }

        public function addRoomToCart()
        {
            $room = Room::find($this->room_id);
            \Cart::add(array(
                "id" => $room->id,
                "name" => "room for ".$room->guestnumber." Persons",
                "price" => (int)$room->price,
                // "quantity" => $request->qty,
                "quantity" => 1,
                "attributes" => array(),
                "associatedModel" => $room,
            ));

    
        }
}
