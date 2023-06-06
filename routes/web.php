<?php

use App\Http\Livewire\Cart;
use App\Http\Livewire\Checkout;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Hardware;
use App\Http\Livewire\Services;
use App\Http\Livewire\Shop;
use App\Http\Livewire\ShoppingCart;
use App\Http\Livewire\Welcome;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Welcome::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('Dashboard');

    Route::get('/Shop', Shop::class)->name('Shop');

    Route::get('/Hardware', Hardware::class)->name('Hardware');

    Route::get('/Services', Services::class)->name('Services');

    Route::get('/Cart', Cart::class)->name('Cart'); 

});
