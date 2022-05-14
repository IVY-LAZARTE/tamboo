<div>
    <x-slot name="header">
        <div class="flex items-center">


            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                Lista de Noticias
            </h2>
            <div class="ml-auto">
                @livewire('create-noticias')
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

            @if ($noticias->count())
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Titulo de Noticias
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tipo de Noticia
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Imagen
                        </th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($noticias as $item)

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">

                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $item->titulo_noticia }}
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">

                            <div class="text-sm text-gray-900">
                                {{ $item->tipo_noticia }}
                            </div>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap">

                            <div class="text-sm text-gray-900">
                                {{ $item->fecha}}
                            </div>

                        </td>

                        <td>

                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10  object-cover" src="{{ Storage::url($item->imagen) }}" alt="">

                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                            {{--@livewire('edit-noticia', ['noticia' => $noticia],key($noticia->id))--}}

                            <a href="#" class="btn btn-blue cursor-pointer mr-1" wire:click="edit({{$item}})">
                                Editar
                            </a>

                            <a href="#" class="btn btn-red cursor-pointer" wire:click="$emit('deleteNoticia',{{ $item->id }})">
                                Eliminar
                            </a>
                        </td>


                        @endforeach
                    </tr>
                    <!-- More people... -->
                </tbody>
            </table>

            @else
            <div class="px-6 py-4">
                No hay ningún registro coincidente
            </div>
            @endif

            @if ($noticias->hasPages())

            <div class="px-6 py-4">
                {{ $noticias->links() }}
            </div>

            @endif

        </x-table-responsive>
    </div>

    <x-jet-dialog-modal wire:model="open_edit">
        <x-slot name="title">
            Actualizar Noticia
        </x-slot>

        <x-slot name="content">

            <div wire:loading wire:target="image"
                class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">!Imagen Cargando!</strong>
                <span class="block sm:inline">Espere un momento hasta que la imagen se haya procesado</span>

            </div>

            @if ($image)
            <img class="mb-4" src="{{$image->temporaryUrl()}}" alt="">
            @else
            <img class="mb-4" src="{{Storage::url($noticia->imagen)}}" alt="">
            @endif


            <div class="mb-4">
                <x-jet-label value="Titulo" />
                <x-jet-input type="text" class="w-full" wire:model="noticia.titulo_noticia" />
                <x-jet-input-error for="noticia.titulo_noticia" />

                <x-jet-label value="Tipo de Noticia" />
                <x-jet-input type="text" class="w-full" wire:model="noticia.tipo_noticia" />
                <x-jet-input-error for="noticia.tipo_noticia" />


            </div>
            <div>
                <input type="file" wire:model="image" id="{{$identificador}}">
                <x-jet-input-error for="image" />
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open_edit',false)">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="save, image"
                class="disabled:opacity-25">
                Actualizar
            </x-jet-danger-button>

        </x-slot>

    </x-jet-dialog-modal>

    @push('script')
    <script src="sweetalert2.all.min.js"></script>
    
    <script>
       Livewire.on('deleteNoticia', noticiaId => {
        Swal.fire({
  title: 'Estas seguro de eliminar esta noticia?',
  
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.isConfirmed) {
     Livewire.emitTo('show-noticias','delete',noticiaId);

    Swal.fire(
      'Eliminado!',
      'La noticia fue eliminada.',
      'success'
    )
  }
})
       } );
    </script>
    @endpush

</div>