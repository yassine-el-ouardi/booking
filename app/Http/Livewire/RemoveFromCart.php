<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RemoveFromCart extends Component
{
    public function render()
    {
        return view('livewire.remove-from-cart');
    }





    public function clearCart(){
        \Cart::clear();
    }


}
