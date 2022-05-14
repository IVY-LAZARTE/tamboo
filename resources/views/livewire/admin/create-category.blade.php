<div>
    <x-jet-form-section submit="save" class="mb-6">
        <x-slot name="title">
            Agregar Nueva Empresa
        </x-slot>

        <x-slot name="description">
            Complete la información necesaria para poder agregar una Empresa
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Nombre
                </x-jet-label>

                <x-jet-input wire:model="createForm.name" type="text" class="w-full mt-1" />

                <x-jet-input-error for="createForm.name" />
            </div>

            <div class="col-span-6 sm:col-span-4" style="display: none;">
                <x-jet-label>
                    Slug
                </x-jet-label>

                <x-jet-input disabled wire:model="createForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                <x-jet-input-error for="createForm.slug" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Responsable
                </x-jet-label>

                <x-jet-input wire:model="createForm.responsable" type="text" class="w-full mt-1" />

                <x-jet-input-error for="createForm.responsable" />
            </div>

            <div class="col-span-6 sm:col-span-4"  style="display: none">
                <x-jet-label>
                    Ícono
                </x-jet-label>

                <x-jet-input wire:model.defer="createForm.icon" type="text" class="w-full mt-1" />
                <x-jet-input-error for="createForm.icon" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Número de Contacto
                </x-jet-label>

                <x-jet-input wire:model="createForm.numero_contacto" type="number" class="w-full mt-1" />

                <x-jet-input-error for="createForm.numero_contacto" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Número de Cuenta
                </x-jet-label>

                <x-jet-input wire:model="createForm.numero_cuenta" type="number" class="w-full mt-1" />

                <x-jet-input-error for="createForm.numero_cuenta" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Usuario
                </x-jet-label>

                <select class="mt-1 w-full form-control" wire:model="createForm.user_id">
                    <option value="" selected disabled>Seleccione usuario</option>

                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>

                <x-jet-input-error for="createForm.user_id" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Imagen
                </x-jet-label>

                <input wire:model="createForm.image" accept="image/*" type="file" class="mt-1" name="" id="{{$rand}}">
                <x-jet-input-error for="createForm.image" />
            </div>
        </x-slot>


        <x-slot name="actions">

            <x-jet-action-message class="mr-3" on="saved">
                Empresa creada
            </x-jet-action-message>

            <x-jet-button>
                Agregar
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-jet-action-section>
        <x-slot name="title">
            Lista de Empresas
        </x-slot>

        <x-slot name="description">
            Aquí encontrará todas las empresas agregadas
        </x-slot>

        <x-slot name="content">

            <table class="text-gray-600">
                <thead class="border-b border-gray-300">
                    <tr class="text-left">
                        <th class="py-2 w-full">Nombre de la Empresa</th>
                        <th class="py-2">Acción</th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-gray-300">
                    @foreach ($categories as $category)
                    <tr>
                        <td class="py-2">
                        {{--    <span class="inline-block w-8 text-center mr-2">
                                {!!$category->icon!!}
                            </span> --}}

                        {{-- <a href="{{route('admin.categories.show', $category)}}" class="uppercase underline hover:text-blue-600">
                                {{$category->name}}
                            </a>--}}    
                            {{$category->name}}
                        </td>
                        <td class="py-2">
                            <div class="flex divide-x divide-gray-300 font-semibold">
                                <a class="pr-2 hover:text-blue-600 cursor-pointer" wire:click="edit('{{$category->slug}}')">Editar</a>
                                <a class="pl-2 hover:text-red-600 cursor-pointer" wire:click="$emit('deleteCategory', '{{$category->slug}}')">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </x-slot>
    </x-jet-action-section>

    <x-jet-dialog-modal wire:model="editForm.open">

        <x-slot name="title">
            Editar categoría
        </x-slot>

        <x-slot name="content">

            <div class="space-y-3">

                <div>
                    @if ($editImage)
                    <img class="w-full h-64 object-cover object-center" src="{{$editImage->temporaryUrl()}}" alt="">
                    @else
                    <img class="w-full h-64 object-cover object-center" src="{{Storage::url($editForm['image'])}}" alt="">
                    @endif
                </div>

                <div>
                    <x-jet-label>
                        Nombre
                    </x-jet-label>

                    <x-jet-input wire:model="editForm.name" type="text" class="w-full mt-1" />

                    <x-jet-input-error for="editForm.name" />
                </div>

                <div style="display: none">
                    <x-jet-label>
                        Slug
                    </x-jet-label>

                    <x-jet-input disabled wire:model="editForm.slug" type="text" class="w-full mt-1 bg-gray-100" />
                    <x-jet-input-error for="editForm.slug" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <x-jet-label>
                        Responsable
                    </x-jet-label>
    
                    <x-jet-input wire:model="editForm.responsable" type="text" class="w-full mt-1" />
    
                    <x-jet-input-error for="editForm.responsable" />
                </div>
    

                <div  style="display: none">
                    <x-jet-label>
                        Ícono
                    </x-jet-label>

                    <x-jet-input wire:model.defer="editForm.icon" type="text" class="w-full mt-1" />
                    <x-jet-input-error for="editForm.icon" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Número de Contacto
                </x-jet-label>

                <x-jet-input wire:model="editForm.numero_contacto" type="number" class="w-full mt-1" />

                <x-jet-input-error for="editForm.numero_contacto" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Número de Cuenta
                </x-jet-label>

                <x-jet-input wire:model="editForm.numero_cuenta" type="number" class="w-full mt-1" />

                <x-jet-input-error for="editForm.numero_cuenta" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <x-jet-label>
                    Usuario
                </x-jet-label>

                <select class="mt-1 w-full form-control" wire:model="editForm.user_id">
                    <option value="" selected disabled>Seleccione usuario</option>

                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>

                <x-jet-input-error for="editForm.user_id" />
            </div>

                <div>
                    <x-jet-label>
                        Imagen
                    </x-jet-label>

                    <input wire:model="editImage" accept="image/*" type="file" class="mt-1" name="" id="{{$rand}}">
                    <x-jet-input-error for="editImage" />
                </div>
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="editImage, update">
                Actualizar
            </x-jet-danger-button>
        </x-slot>

    </x-jet-dialog-modal>
</div>