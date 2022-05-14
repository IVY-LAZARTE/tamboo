<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{-- Fontawesome --}}
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}">

    {{-- Glider --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.css"
        integrity="sha512-YM6sLXVMZqkCspZoZeIPGXrhD9wxlxEF7MzniuvegURqrTGV2xTfqq1v9FJnczH+5OGFl5V78RgHZGaK34ylVg=="
        crossorigin="anonymous" />


    {{-- FlexSlider --}}
    <link rel="stylesheet" href="{{ asset('vendor/FlexSlider/flexslider.css') }}">

    @livewireStyles
    {{-- sweet alert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- Glider --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glider-js/1.7.7/glider.min.js"
        integrity="sha512-tHimK/KZS+o34ZpPNOvb/bTHZb6ocWFXCtdGqAlWYUcz+BGHbNbHMKvEHUyFxgJhQcEO87yg5YqaJvyQgAEEtA=="
        crossorigin="anonymous"></script>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- FlexSlider --}}
    <script src="{{ asset('vendor/FlexSlider/jquery.flexslider-min.js') }}"></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-green-600">

        @livewire('navigation')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')


    <footer class="bg-red-700 dark:bg-green-800">
        <div class="container px-6 py-4 mx-auto">
            <div class="lg:flex">
                <div class="w-full -mx-5 lg:w-2/5">
                    <div class="px-6">
                        <div>
                            <a href="http://www.gobernacionlapaz.gob.bo/"
                                class="text-xl font-bold text-yellow-500 dark:text-green hover:text-gray-700 dark:hover:text-gray-300"> * Gobierno
                                Autónomo <br> Departamental de La Paz</a>
                        </div>
                        <div>
                            <a href="https://www.facebook.com/SecDesarrolloEconomicoTransformacionIndustrial"
                                class="text-xl font-bold text-yellow-500 dark:text-green hover:text-gray-700 dark:hover:text-gray-300">* Secretaria
                                Departamental de <br> Desarrollo Económico y Transformación Industrial</a>
                        </div>
                     
                        <p class="max-w-md mt-2 text-white dark:text-white"><strong>Dirección:</strong> Calle Comercio Esq. Ayacucho Nº 1200</p>
                        
                        <p class="max-w-md mt-2 text-white dark:text-white"><strong>Telefono:</strong> 2204127 - 2204340 </p>
                       

                        <div class="flex mt-4 -mx-2">
                        

                            <a href="https://www.facebook.com/gobernaciondelapaz/" class="mx-2 text-white dark:white hover:text-gray-600 dark:hover:text-gray-400"
                                aria-label="Facebook">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M455.27,32H56.73A24.74,24.74,0,0,0,32,56.73V455.27A24.74,24.74,0,0,0,56.73,480H256V304H202.45V240H256V189c0-57.86,40.13-89.36,91.82-89.36,24.73,0,51.33,1.86,57.51,2.68v60.43H364.15c-28.12,0-33.48,13.3-33.48,32.9V240h67l-8.75,64H330.67V480h124.6A24.74,24.74,0,0,0,480,455.27V56.73A24.74,24.74,0,0,0,455.27,32Z" />
                                </svg>
                            </a>

                            <a href="https://twitter.com/gobernacionlp"
                                class="mx-2 text-white dark:text-white hover:text-gray-600 dark:hover:text-gray-400"
                                aria-label="Twitter">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M496,109.5a201.8,201.8,0,0,1-56.55,15.3,97.51,97.51,0,0,0,43.33-53.6,197.74,197.74,0,0,1-62.56,23.5A99.14,99.14,0,0,0,348.31,64c-54.42,0-98.46,43.4-98.46,96.9a93.21,93.21,0,0,0,2.54,22.1,280.7,280.7,0,0,1-203-101.3A95.69,95.69,0,0,0,36,130.4C36,164,53.53,193.7,80,211.1A97.5,97.5,0,0,1,35.22,199v1.2c0,47,34,86.1,79,95a100.76,100.76,0,0,1-25.94,3.4,94.38,94.38,0,0,1-18.51-1.8c12.51,38.5,48.92,66.5,92.05,67.3A199.59,199.59,0,0,1,39.5,405.6,203,203,0,0,1,16,404.2,278.68,278.68,0,0,0,166.74,448c181.36,0,280.44-147.7,280.44-275.8,0-4.2-.11-8.4-.31-12.5A198.48,198.48,0,0,0,496,109.5Z" />
                                </svg>
                            </a>
                            <a href="https://www.instagram.com/Gobernacionlapaz/" 
                                class="mx-2 text-white dark:text-white hover:text-gray-600 dark:hover:text-gray-400"
                                aria-label="Linkden">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                width="18" height="18"
                                viewBox="0 0 172 172"
                                style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M57.65527,19.35c-19.93789,0 -36.15527,16.21738 -36.15527,36.15527v56.68945c0,19.93789 16.21738,36.15527 36.15527,36.15527h56.68945c19.93789,0 36.15527,-16.21738 36.15527,-36.15527v-56.68945c0,-19.93789 -16.21738,-36.15527 -36.15527,-36.15527zM57.65527,23.65h56.68945c17.61152,0 31.85527,14.24375 31.85527,31.85527v56.68945c0,17.61152 -14.24375,31.85527 -31.85527,31.85527h-56.68945c-17.61152,0 -31.85527,-14.24375 -31.85527,-31.85527v-56.68945c0,-17.61152 14.24375,-31.85527 31.85527,-31.85527zM124.7,41.925c-2.96465,0 -5.375,2.41035 -5.375,5.375c0,2.96465 2.41035,5.375 5.375,5.375c2.96465,0 5.375,-2.41035 5.375,-5.375c0,-2.96465 -2.41035,-5.375 -5.375,-5.375zM86,47.3c-20.16465,0 -36.55,16.38535 -36.55,36.55c0,20.16465 16.38535,36.55 36.55,36.55c20.16465,0 36.55,-16.38535 36.55,-36.55c0,-20.16465 -16.38535,-36.55 -36.55,-36.55zM86,51.6c17.83828,0 32.25,14.41172 32.25,32.25c0,17.83828 -14.41172,32.25 -32.25,32.25c-17.83828,0 -32.25,-14.41172 -32.25,-32.25c0,-17.83828 14.41172,-32.25 32.25,-32.25zM86,58.05c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM76.96328,59.84727c-0.28555,0 -0.57109,0.05039 -0.83984,0.15957c-1.0918,0.46191 -1.6125,1.71328 -1.15898,2.81348c0.45351,1.1002 1.71328,1.6209 2.80508,1.16738c1.1002,-0.46191 1.6209,-1.71328 1.16738,-2.81348c-0.32754,-0.79785 -1.10859,-1.31855 -1.97363,-1.32695zM95.09551,59.84727c-0.89024,-0.0168 -1.69649,0.50391 -2.03242,1.32695c-0.45351,1.1002 0.06719,2.35156 1.16738,2.81348c1.0918,0.45351 2.35156,-0.06719 2.80508,-1.16738c0.45351,-1.1002 -0.06719,-2.35156 -1.15899,-2.81348c-0.25195,-0.10078 -0.5123,-0.15117 -0.78105,-0.15957zM69.30391,64.97871c-0.57949,-0.0084 -1.13379,0.21836 -1.54531,0.62988c-0.83984,0.83984 -0.83984,2.20039 0,3.04024c0.83984,0.83984 2.20039,0.83984 3.04024,0c0.83984,-0.83984 0.83984,-2.20039 0,-3.04024c-0.39473,-0.39473 -0.93223,-0.62148 -1.49492,-0.62988zM102.75488,64.97871c-0.58789,-0.0084 -1.14219,0.21836 -1.55371,0.62988c-0.83984,0.83984 -0.83984,2.20039 0,3.04024c0.83984,0.83984 2.20039,0.83984 3.04023,0c0.83984,-0.83984 0.83984,-2.20039 0,-3.04024c-0.39473,-0.39473 -0.93223,-0.62148 -1.48652,-0.62988zM107.86953,72.64649c-0.29395,0 -0.57949,0.05039 -0.83984,0.15957c-1.1002,0.46191 -1.6209,1.71328 -1.16738,2.81348c0.45352,1.1002 1.71328,1.6209 2.81348,1.16738c1.0918,-0.46191 1.6125,-1.71328 1.15899,-2.81348c-0.32754,-0.79785 -1.10859,-1.31855 -1.96524,-1.32695zM64.19766,72.65488c-0.89023,-0.0252 -1.69648,0.50391 -2.03242,1.31855c-0.45352,1.1002 0.06719,2.35996 1.15898,2.81348c0.5291,0.21836 1.12539,0.21836 1.65449,0c0.5207,-0.21836 0.94062,-0.63828 1.15899,-1.16738c0.21836,-0.5291 0.21836,-1.11699 0,-1.64609c-0.21836,-0.5291 -0.63828,-0.94902 -1.16738,-1.16738c-0.24355,-0.09238 -0.50391,-0.15117 -0.77266,-0.15117zM62.35,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM109.65,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM64.16406,90.74512c-0.28555,0 -0.57109,0.05879 -0.83984,0.16797c-1.0918,0.45352 -1.6125,1.71328 -1.15898,2.81348c0.45351,1.0918 1.71328,1.6125 2.80508,1.15899c1.1002,-0.45352 1.6209,-1.71328 1.16738,-2.80508c-0.32754,-0.79785 -1.10859,-1.32695 -1.97363,-1.33535zM107.90312,90.74512c-0.89023,-0.0168 -1.69648,0.51231 -2.04082,1.32695c-0.45351,1.1002 0.06719,2.35156 1.16738,2.80508c1.1002,0.46191 2.35156,-0.05879 2.81348,-1.15898c0.45351,-1.1002 -0.06719,-2.35156 -1.16738,-2.81348c-0.24355,-0.10078 -0.5123,-0.15117 -0.77266,-0.15957zM69.30391,98.42129c-0.57949,-0.0084 -1.14219,0.21836 -1.54531,0.62988c-0.83984,0.83984 -0.83984,2.20039 0,3.04023c0.83145,0.83984 2.20039,0.83984 3.03184,0c0.83984,-0.83984 0.83984,-2.20039 0,-3.04023c-0.39472,-0.39473 -0.92383,-0.62149 -1.48652,-0.62988zM102.75488,98.42969c-0.58789,-0.0168 -1.14219,0.20996 -1.55371,0.62149c-0.40313,0.40313 -0.62988,0.94902 -0.62988,1.52012c0,0.57109 0.22676,1.11699 0.62988,1.52012c0.83984,0.83984 2.20039,0.83984 3.04023,0c0.40313,-0.40312 0.62988,-0.94902 0.62988,-1.52012c0,-0.57109 -0.22676,-1.11699 -0.62988,-1.52012c-0.39473,-0.39473 -0.93223,-0.62149 -1.48652,-0.62149zM76.99688,103.54434c-0.89023,-0.0168 -1.69648,0.51231 -2.03242,1.33535c-0.45352,1.0918 0.06719,2.35156 1.15898,2.80508c1.1002,0.45351 2.35996,-0.06719 2.81348,-1.15899c0.45351,-1.1002 -0.06719,-2.35996 -1.16738,-2.81348c-0.24355,-0.10078 -0.50391,-0.15957 -0.77266,-0.16797zM95.07031,103.54434c-0.28555,0 -0.57109,0.05879 -0.83984,0.16797c-1.1002,0.45352 -1.6209,1.71328 -1.16738,2.81348c0.46191,1.0918 1.71328,1.6125 2.81348,1.15899c1.1002,-0.45352 1.6209,-1.71328 1.16738,-2.80508c-0.33594,-0.79785 -1.10859,-1.32695 -1.97363,-1.33535zM86,105.35c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15z"></path></g></g></svg>
                             </a>
                         
                          
                        </div>
                        
                      
                      
                    </div>
                </div>
              

                <div class="mt-6 lg:mt-0 mx-12 lg:flex-1">
                    <div class="grid grid-cols-2 gap-6 sm:grid-cols-3 md:grid-cols-3 ">
                            <div class="justify-center ">
                            <h3 class="text-yellow-500 font-bold  uppercase dark:text-white hover:text-gray-700 dark:hover:text-gray-300 mb-4">Código Qr</h3>
                            <img class="w-28 rounded-md" src="{{ asset('img/qr.jpeg')}}" alt="">
                                        <img class="text-center w-20" src="{{ asset('img/sello.png')}}" alt="">                         
                                 
                            </div>
                          
                            
                            
                        
                            <div class=" ">
                                        <h3 class="text-yellow-500 font-bold  uppercase dark:text-yellow w-30 hover:text-gray-700 dark:hover:text-gray-300 mb-4">Ubicación</h3>
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.6158335156174!2d-68.13778258554184!3d-16.494978944968704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f2073bc8559a7%3A0xe5d22c27831f221f!2sC.%20Comercio%2C%20La%20Paz!5e0!3m2!1ses!2sbo!4v1639786594887!5m2!1ses!2sbo" width="200" height="150" style="border:0; border-radius:8px" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                       
                        
                            <div class="grid grid-cols-2 divide-x-none mb-4">
                                   <div>
                                   <h3 class="text-yellow-500 font-bold  uppercase dark:text-white hover:text-gray-700 dark:hover:text-gray-300">GADLP</h3>
                          
                            
                                    <img class="w-24 h-24" src="{{ asset('img/escudo.png')}}" alt=""> 
                                    </div>
                                    <div>
                                    <h3 class="text-yellow-500 font-bold  uppercase dark:text-white hover:text-gray-700 dark:hover:text-gray-300">SDDETI</h3>
                          
                            
                                    <img class="w-24 h-30" src="{{ asset('img/sddeti.png')}}" alt=""> 
                                    </div>
                            </div>
                                      
                       
                     
                            
                    </div>
                </div>
            </div>
              <img class="w-full" src="img/cinta.png">
         
            <div>
                <p class="text-center text-white dark:text-white">© - Todos los derechos reservados</p>
            </div>
        </div>
    </footer>

    @livewireScripts

@stack('js')
    <script>
        function dropdown(){
                return {
                    open: false,
                    show(){
                        if(this.open){
                            //Se cierra el menu
                            this.open = false;
                            document.getElementsByTagName('html')[0].style.overflow = 'auto'
                        }else{
                            //Esta abriendo el menu
                            this.open = true;
                            document.getElementsByTagName('html')[0].style.overflow = 'hidden'
                        }
                    },
                    close(){
                        this.open = false;
                        document.getElementsByTagName('html')[0].style.overflow = 'auto'
                    }
                }
            }
    </script>

    <script>
        Livewire.on('alert',function($message){
                Swal.fire(
  'Exito!',
  $message,
  'success'
)
            })
    </script>
    <script>

    
    <script>
       Livewire.on('deleteNoticia', noticiaId => {
        Swal.fire({
  title: 'Estas seguro de Eliminar?',
  text: "Una vez eliminado esta acción no se puede revertir!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
       } )
    </script>

    </script>

    @stack('script')

</body>

</html>