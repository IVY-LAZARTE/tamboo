<div>
    <a href="#" class="text-indigo-600 hover:text-indigo-900" wire:click="$set('open',true)">
        Ver
    </a>



        <x-jet-dialog-modal wire:model="open">
            <x-slot name="title">
                Comprobante de pago 
            </x-slot>

            <x-slot name="content">

                <img  class="mb-4" src="{{Storage::url($comprobante->image)}}" alt=""> 

                <div class="mb-4">
                    <x-jet-label value="Nombre del Comprador" />
                    <x-jet-input disabled wire:model="comprobante.contact" type="text" class="w-full" />

                    <x-jet-label value="Número de Celular" />
                    <x-jet-input disabled type="text" class="w-full" wire:model="comprobante.phone"/>

                </div>
             {{--  <div>
                    <input type="file" wire:model="image" id="{{$identificador}}">
                    <x-jet-input-error for="comprobante.image"/> 
                </div>
                --}} 
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('open',false)">
                    Cerrar
                </x-jet-secondary-button>    
            </x-slot>
     
        </x-jet-dialog-modal>
    
</div>
