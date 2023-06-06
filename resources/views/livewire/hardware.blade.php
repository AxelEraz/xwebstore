
<div class="grid grid-cols-1 lg:grid-cols-3 items-center py-10">
    @foreach ($products as $product)
        <div class="mx-auto w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 my-5">
            <div class="px-5 pb-auto ">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$product->title}}</h5>
                </a>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-gray-900 dark:text-white mx-auto">${{$product->price}}</span>
                    <span class="text-2xl text-gray-900 dark:text-blue-600 mx-auto">{{$product->delivered}}</span>
                </div>
                <div class="flex items-center">
                
                        <button type="submit" wire:click="addToCart({{ $product->id }})" class="mx-auto px-auto focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                            Agregar al carrito</a>
                  
                </div>
            </div>
        </div>
    @endforeach


    <div class="mx-auto">
        @if (session()->has('addPrdouct'))
        <div class="flex fixed top-5 p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
            <svg aria-hidden="true" class="flex-shrink-0 inline w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <span class="sr-only">Info</span>
            <div>
                {{session('addProduct') }}
            </div>
        </div>
        @endif
    </div>


    <div class="flex">
            {{ $products->links('vendor.livewire.tailwind') }}
        </div>
    
</div>
