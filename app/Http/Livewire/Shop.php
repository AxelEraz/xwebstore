<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Shop extends Component
{
    public function render()
    {
        return view('livewire.shop', [
            'products' => Product::simplePaginate(10),
        ])
        ->layout('layouts.guest');
    }
    
}
