<div>
    <x-slot name="header">
        <div class="flex items-center">


            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                Lista de Promociones
            </h2>
            <div class="ml-auto">
                @livewire('create-promociones')
            </div>

        </div>
    </x-slot>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="container py-12">

        <x-table-responsive>

            <div class="px-6 py-4">

                <x-jet-input type="text" wire:model="search" class="w-full"
                    placeholder="Ingrese el nombre de la promoción que quiere buscar" />

            </div>

            @if ($promociones->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Descripción
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Precio
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Telefono
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Imagen
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($promociones as $item)

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">

                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $item->descripcion }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">

                            <div class="text-sm text-gray-900">
                                {{ $item->precio }}
                            </div>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">

                            <div class="text-sm text-gray-900">
                                {{ $item->contacto_celular }}
                            </div>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">
                            @switch($item->rubro)
                                @case(1)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Borrador
                                    </span>
                                @break
                                @case(2)
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Publicado
                                    </span>
                                @break
                                @default

                            @endswitch

                        </td>
                        <td>
                            <div class="flex-shrink-0 h-10 w-10">
                            <img class="h-10 w-10  object-cover" src="{{ Storage::url($item->imagen) }}"
                                    alt="">
                            </div>
                        </td>
                        

                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                            <a href="#" class="btn btn-blue cursor-pointer mr-1" wire:click="edit({{$item}})">
                                Editar
                            </a>
                            <a href="#" class="btn btn-red cursor-pointer" wire:click="$emit('deletePromocion',{{ $item->id }})">
                                Eliminar
                            </a>
                        </td>

                    </tr>

                    @endforeach
                    <!-- More people... -->
                </tbody>
            </table>

            @else
            <div class="px-6 py-4">
                No hay ningún registro coincidente
            </div>
            @endif

            @if ($promociones->hasPages())

            <div class="px-6 py-4">
              {{ $promociones->links() }} 
            </div>

            @endif

        </x-table-responsive>
    </div>

    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title">
            Actualizar Promoción
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image" class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">!Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado</span>
                
              </div>

            @if ($image)
            <img  class="mb-4" src="{{$image->temporaryUrl()}}" alt="">  
            @else
            <img  class="mb-4" src="{{Storage::url($promocion->imagen)}}" alt="">  
            @endif
         

            <div class="mb-4">
                <x-jet-label value="Titulo" />
                <x-jet-input type="text" class="w-full" wire:model="promocion.descripcion"/>
                <x-jet-input-error for="promocion.descripcion"/> 

                <x-jet-label value="Precio" />
                <x-jet-input type="number" class="w-full" wire:model="promocion.precio"/>
                <x-jet-input-error for="promocion.precio"/> 

                <x-jet-label value="Estado" />
                    <input wire:model="promocion.rubro" type="radio" name="rubro" value="1">
                    Marcar como borrador
                    <input wire:model="promocion.rubro" type="radio" name="rubro" value="2">
                    Marcar como publicado
                <x-jet-input-error for="rubro"/> 
               

                <x-jet-label value="Número de Celular" />
                <x-jet-input type="number" class="w-full" wire:model="promocion.contacto_celular"/>
                <x-jet-input-error for="promocion.contacto_celular"/> 

            </div>
            <div>
                <input type="file" wire:model="image" id="{{$identificador}}">
                <x-jet-input-error for="image"/> 
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open_edit',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="save, image" class="disabled:opacity-25">
                Confirmar operación
            </x-jet-danger-button>
       
        </x-slot>
 
    </x-jet-dialog-modal>

    @push('script')
    <script src="sweetalert2.all.min.js"></script>
    
    <script>
       Livewire.on('deletePromocion', promocionId => {
        Swal.fire({
  title: 'Estas seguro de eliminar esta promoción?',
  
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.isConfirmed) {

    Livewire.emitTo('show-promociones','delete', promocionId);

    Swal.fire(
      'Eliminado!',
      'La promoción fue eliminada.',
      'success'
    )
  }
})
       } );
    </script>
    @endpush

</div>