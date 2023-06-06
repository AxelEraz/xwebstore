<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Facades\Cart as CartFacade;

class Checkout extends Component
{
    public $cart;
    
    public function mount()
    {
    
        $this->cart = CartFacade::get();
    }

    public function render()
    {
        return view('livewire.checkout');
    }
    public function removeFromCart($productId): void
    {
        CartFacade::remove($productId);
        $this->cart = CartFacade::get();
        $this->emit('productRemoved');
    }

    public function checkout(): void
    {
        CartFacade::clear();
        $this->emit('clearCart');
        $this->cart = CartFacade::get();
    }

}
