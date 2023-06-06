<div>
    <div class="relative overflow-x-auto shadow-md rounded-lg">
            @if(count($cart['products']) > 0)
            <table class="w-3/4 rounded-lg mx-auto text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Imagen</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Amount</th>
                            <th scope="col" class="px-6 py-3">Price</th>
                            <th scope="col" class="px-6 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cart['products'] as $product)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-32 p-4"><img src="/docs/images/products/apple-watch.png" alt="Apple Watch"></td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">{{ $product->title }}</td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                @if( $product->amount == 1)
                                    
                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button"
                                    wire:click="removeFromCart({{ $product->id }})">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                    </button>
                                    @else

                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button"
                                    wire:click="downAmount({{ $product->id , $product->price , $product->amount }})">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                    </button> 
                                    @endif
                                        <span class="px-2 py-1">{{ $product->amount }}</span>
                      
            
                                    <button class="inline-flex items-center p-1 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-full focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" type="button"
                                    wire:click="addAmount({{ $product->id }})">
                                        <span class="sr-only">Quantity button</span>
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    </button>
                                </td>
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">{{ $product->price }}</td>
                                
                                <td class="px-6 py-4 font-semibold text-gray-900 dark:text-white">
                                    <a wire:click="removeFromCart({{ $product->id }})" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                </td>
                            </tr>
                        @endforeach
                        <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 h-20">
                            <td>
                                
                            </td>

                            <td>
                                SubTotal: 
                            </td>
                            <td>
                                Envio: $ 
                            </td>
                            <td>
                                Total: $
                            </td>
                        </tr>
                    </tbody>
                </table>
            @else
                <div class="text-white text-center w-full border-collapse p-6">
                    <span class="text-lg">¡Your cart is empty!</span>
                </div>
            @endif

                <div class="text-right w-full p-6">
                    <button wire:click="Checkout()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Checkout
                    </button>
                </div>
                
    </div>
    
</div>