<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart1 extends Component
{




    public function render()
    {
        return view('livewire.cart1');
    }

    public function removeRoomFromCart($room_id)
    {

        \Cart::remove($room_id);

    }
}
