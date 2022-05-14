<div x-data>
    @auth
        
   
    @if (count(Auth::user()->roles))

    <p class=" text-white mb-4">
        <span class="font-semibold text-white text-lg">Cantidad disponible:</span> {{$quantity}}
    </p>
   
    
@else
<p class=" text-white mb-4">
    <span class="font-semibold text-white text-lg">Cantidad disponible:</span> {{$quantity}}
</p>

<div class="flex">
    <div class="mr-4">
        <x-jet-secondary-button 
            disabled
            x-bind:disabled="$wire.qty <= 1"
            wire:loading.attr="disabled"
            wire:target="decrement"
            wire:click="decrement">
            -
        </x-jet-secondary-button>

        <span class="mx-2 text-gray-50">{{$qty}}</span>

        <x-jet-secondary-button 
            x-bind:disabled="$wire.qty >= $wire.quantity"
            wire:loading.attr="disabled"
            wire:target="increment"
            wire:click="increment">
            +
        </x-jet-secondary-button>
    </div>

    <div class="flex-1">
        
        <x-button color="red" 
            x-bind:disabled="$wire.qty > $wire.quantity"
            class="w-full"
            wire:click="addItem"
            wire:loading.attr="disabled"
            wire:target="addItem">
            Agregar al carrito de compras
        </x-button>
    </div>
</div>
@endif
@endauth


</div>