<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use Livewire\Component;
use Illuminate\Contracts\View\View;


class ShoppingCart extends Component
{
    public $cartTotal = 0;

    protected $listeners = [
        'productAdded' => 'updateCartTotal',
        'productRemoved' => 'updateCartTotal',
        'clearCart' => 'updateCartTotal'
    ];



    public function mount(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }



    public function render(): View
    {
        return view('livewire.shopping-cart');
    }

    
    public function updateCartTotal(): void
    {
        $this->cartTotal = count(Cart::get()['products']);
    }
    
}