<?php

namespace App\Http\Livewire;

use App\Facades\Cart;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class Hardware extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.hardware', [
            'products' => Product::paginate(15)
        ]);
    }

    public function addToCart(int $productId): void
    {
        Cart::add(Product::where('id', $productId)->first());
        $this->emit('productAdded');
    }

}
