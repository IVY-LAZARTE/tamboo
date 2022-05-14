<div>
    <x-button-enlace class="ml-auto" wire:click="$set('open',true)">
            Agregar Promoción  
    </x-button-enlace>

    <x-jet-dialog-modal wire:model="open">
        <x-slot name="title">
            Registro de Promoción
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">!Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado</span>
                
              </div>

            @if ($image)
            <img  class="mb-4" src="{{$image->temporaryUrl()}}" alt="">  
            @endif

            <div class="mb-4">
                <x-jet-label value="Titulo" />
                <x-jet-input type="text" class="w-full" wire:model="descripcion"/>
                <x-jet-input-error for="descripcion"/> 

                <x-jet-label value="Precio" />
                <x-jet-input type="number" class="w-full" wire:model="precio"/>
                <x-jet-input-error for="precio"/> 

                <x-jet-label value="Estado" />
                    <input wire:model="rubro" type="radio" name="rubro" value="1">
                    Marcar como borrador
                    <input wire:model="rubro" type="radio" name="rubro" value="2">
                    Marcar como publicado
                <x-jet-input-error for="rubro"/> 
               

                <x-jet-label value="Número de Celular" />
                <x-jet-input type="number" class="w-full" wire:model="contacto_celular"/>
                <x-jet-input-error for="contacto_celular"/> 

            </div>
            <div>
                <input type="file" wire:model="image" id="{{$identificador}}">
                <x-jet-input-error for="image"/> 
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save, image" class="disabled:opacity-25">
                Confirmar operación
            </x-jet-danger-button>
       
        </x-slot>
 
    </x-jet-dialog-modal>
</div>