<div>

    <x-slot name="header">
        <div class="flex items-center">

            @can('product.edit')
            <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                Lista de Comprobantes
            </h2>
            @endcan

        </div>
    </x-slot>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="container py-12">
      
        <x-table-responsive>

            <div class="px-6 py-4">

                <x-jet-input type="text" wire:model="search" class="w-full"
                    placeholder="Ingrese el nombre del comprador que quiere buscar" />

            </div>
@if ($comprobantes->count())

            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre del Comprador
                        </th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Telefono
                        </th>

                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Empresa
                        </th>


                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">

                    @foreach ($comprobantes as $comprobante)

                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">

                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $comprobante->contact }}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">

                            <div class="text-sm text-gray-900">
                                {{ $comprobante->phone }}
                            </div>

                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$comprobante->category}}
                        </td>
                        <td>

                            <div class="flex-shrink-0 h-10 w-10">
                                <img class="h-10 w-10  object-cover" src="{{ Storage::url($comprobante->image) }}"
                                    alt="">

                            </div>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap  text-sm font-medium">
                            @livewire('edit-comprobante', ['comprobante' => $comprobante], key($comprobante->id))
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

            @if ($comprobantes->hasPages())

            <div class="px-6 py-4">
                {{ $comprobantes->links() }}
            </div>

            @endif


        </x-table-responsive>
    </div>


</div>