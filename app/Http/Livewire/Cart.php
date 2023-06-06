<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use App\Facades\Cart as CartFacade;
use Livewire\Component;

class Cart extends Component
{
    public $cart;

    public function mount(): void
    {
        $this->cart = CartFacade::get();

    }

    public function render()
    {
        return view('livewire.cart');
    }

    public function removeFromCart($productId): void

    {
        CartFacade::remove($productId);
        $this->cart = CartFacade::get();
        $this->emit('productRemoved');
    }

    public function addAmount(int $productId): void

    {   
        CartFacade::add(Product::where('id', $productId)->first());
        $this->emit('productUpdated');
        $this->cart = CartFacade::get();
    }
    
    public function downAmount(int $productId): void

    {   
        CartFacade::down(Product::where('id', $productId)->first());
        $this->emit('productUpdated');
        $this->cart = CartFacade::get();
    }


    public function checkout($cart, $shipment): void
    {   
        CartFacade::clear();
        $this->emit('clearCart');
        $this->cart = CartFacade::get();
      //  $orderItems = $this -> json_encode($cart);
      //  
      //  Order::create([
      //      'orderItems' => $this->orderItems,
      //  ]);

    }

}