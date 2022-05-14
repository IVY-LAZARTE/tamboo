<x-admin-layout>
    
    <div class="container py-12">
        @livewire('admin.create-category')
    </div>

    @push('script')
        <script>
            Livewire.on('deleteCategory', categorySlug => {
            
                Swal.fire({
                    title: 'Estas seguro de eliminar la Empresa?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, eliminar!'
                }).then((result) => {
                    if (result.isConfirmed) {

                        Livewire.emitTo('admin.create-category', 'delete', categorySlug)

                        Swal.fire(
                            'Eliminar!',
                            'La empresa fue eliminada.',
                            'success'
                        )
                    }
                })

            });
        </script>
    @endpush

</x-admin-layout>