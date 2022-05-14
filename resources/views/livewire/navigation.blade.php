<header class="bg-red-700 sticky top-0" style="z-index: 900" x-data="dropdown()">
    <div class="container flex items-center h-16 justify-between md:justify-start">
  
        <div>
        <a href="/welcome" class="mx-6">
            <x-jet-application-logo class="block h-9 w-auto" />
        </a>
        </div>
       
        <div class="hidden md:block">        
            <x-pro/>
        </div>

        <a href="/welcome"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172"
                style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g fill="#ffffff">
                        <path
                            d="M50.16667,21.5l-35.83333,50.16667h7.16667v78.83333h129v-78.83333h7.16667l-35.83333,-50.16667zM78.02149,35.83333h36.43522l15.35514,21.5h-36.43522zM60.91667,36.5472l25.08333,35.11947h50.16667v64.5h-57.33333v-43h-28.66667v43h-14.33333v-64.5zM93.16667,93.16667v28.66667h28.66667v-28.66667z">
                        </path>
                    </g>
                </g>
            </svg>
            <span class="text-sm hidden md:block">Inicio</span>
        </a>

        <a :class="{'bg-white text-green-500' : open}" x-on:click="show()"
            class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-white bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16" />
            </svg>


            <span class="text-sm hidden text-white md:block">Empresas</span>
        </a>

        <a href="/promocion" class="flex flex-col items-center justify-center order-last md:order-first px-6 md:px-4 bg-opacity-25 text-white cursor-pointer font-semibold h-full">
            <svg class="animate-bounce" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
    width="30" height="30"
    viewBox="0 0 172 172"
    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M140.825,21.5c-4.06484,0 -7.39062,3.30059 -7.49141,7.34863c-17.69551,15.97383 -40.65684,24.90137 -64.53359,24.90137h-30.1c-2.81348,0 -5.20703,1.85605 -6.08047,4.39238c-9.82617,0.89863 -17.56953,9.19629 -17.56953,19.25762v4.3c0,9.90176 7.59219,17.78789 17.2,18.91328v0.43672h0.37793c0.70547,1.93164 2.30957,3.43496 4.3,4.02285c8.49082,8.84355 11.69903,26.55586 12.65645,41.07676c0.50391,7.49141 8.02891,12.58086 15.15918,10.2041l7.48301,-2.49434c5.82012,-1.94844 9.1543,-8.18008 7.43262,-14.10098c-1.91484,-6.60957 -4.96347,-9.33906 -6.90351,-17.2084h2.1332c3.72891,0 6.65996,-3.36777 6.14766,-7.05469l-1.31016,-9.49863c19.8791,2.29278 38.63281,10.7332 53.60723,24.25469c0.10078,4.04805 3.42656,7.34863 7.49141,7.34863c4.13203,0 7.525,-3.39297 7.525,-7.525v-40.21172c4.14043,-0.88184 7.28145,-4.02285 8.16328,-8.16328h0.43672v-2.15c0,-5.17344 -3.71211,-9.52383 -8.6,-10.53164v-39.99336c0,-4.13203 -3.39297,-7.525 -7.525,-7.525zM140.825,25.8c1.80566,0 3.225,1.41934 3.225,3.225v101.05c0,1.80566 -1.41934,3.225 -3.225,3.225c-1.80566,0 -3.225,-1.41934 -3.225,-3.225v-1.84766l-0.69707,-0.63828c-18.03984,-16.56172 -41.50508,-25.8084 -65.95293,-26.3375v-43.40312c24.44785,-0.5291 47.91309,-9.77578 65.95293,-26.3375l0.69707,-0.63828v-1.84766c0,-1.80566 1.41934,-3.225 3.225,-3.225zM135.45,38.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM135.45,47.3c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM135.45,55.9c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM38.7,58.05h27.95v43h-27.95c-1.21777,0 -2.15,-0.93223 -2.15,-2.15v-38.7c0,-1.21777 0.93223,-2.15 2.15,-2.15zM32.25,62.78672v33.52656c-4.14883,-0.61309 -7.75176,-2.82188 -10.09492,-6.01328h1.49492v-4.3h-3.65332c-0.41152,-1.35215 -0.64668,-2.79668 -0.64668,-4.3h4.3v-4.3h-4.3c0,-1.50332 0.23516,-2.94785 0.64668,-4.3h3.65332v-4.3h-1.49492c2.34316,-3.19141 5.94609,-5.4002 10.09492,-6.01328zM43,64.5v4.3h8.6v-4.3zM135.45,64.5c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM135.45,73.1c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM148.35,73.98184c2.39355,0.94062 4.3,2.82188 4.3,5.56816c0,2.74629 -1.90645,4.62754 -4.3,5.56816zM43,77.4v4.3h8.6v-4.3zM135.45,81.7c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM43,90.3v4.3h8.6v-4.3zM135.45,90.3c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM135.45,98.9c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM42.23574,105.35h24.55703c0.41153,23.73399 6.27363,27.11016 8.74278,35.60938c1.075,3.72891 -0.97422,7.59219 -4.67793,8.82676l-7.47461,2.48594c-4.56035,1.52012 -9.17949,-1.6041 -9.49863,-6.40801c-0.90703,-13.55508 -3.62812,-29.78926 -11.64863,-40.51406zM70.98359,105.39199c1.45293,0.04199 2.90586,0.10918 4.35879,0.20996l1.44453,10.47285c0.15957,1.19258 -0.69707,2.1752 -1.89805,2.1752h-2.98984c-0.5123,-3.35937 -0.83984,-7.56699 -0.91543,-12.85801zM135.45,107.5c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15zM135.45,116.1c-1.18418,0 -2.15,0.96582 -2.15,2.15c0,1.18418 0.96582,2.15 2.15,2.15c1.18418,0 2.15,-0.96582 2.15,-2.15c0,-1.18418 -0.96582,-2.15 -2.15,-2.15z"></path></g></g></svg> 
      <span class="text-sm hidden md:block">Promociones</span>
            </a>

        

        <div class="flex-1 hidden md:block">
            @livewire('search')
        </div>

        <div class="mx-6 relative hidden md:block">
            @auth

            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                            alt="{{ Auth::user()->name }}" />
                    </button>
                    <span class="text-sm hidden md:block text-white capitalize"> {{ Auth::user()->name }}</span>

                </x-slot>

                <x-slot name="content">

                    @if (count(Auth::user()->roles))
                     <!-- Account Management -->
                     <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>
                    
                    @else
                     <!-- Account Management -->
                     <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>



                    <x-jet-dropdown-link href="{{ route('orders.index') }}">
                        Mis pedidos
                    </x-jet-dropdown-link>
                    @endif
                   

                    @can('admin.producto')
                    <x-jet-dropdown-link href="{{ route('admin.index') }}">
                        Administrador
                    </x-jet-dropdown-link>
                    @endcan

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
            </x-jet-dropdown>

            @else

            <x-jet-dropdown align="right" width="48">


                <x-slot name="trigger">
                    <i class="fas fa-user-circle text-white text-3xl ml-4 cursor-pointer"></i>
                    <span class="text-sm text-white hidden md:block mx-2">Acceder</span>
                </x-slot>

                <x-slot name="content">
                    <x-jet-dropdown-link href="{{ route('login') }}">
                        {{ __('Login') }}
                    </x-jet-dropdown-link>

                    <x-jet-dropdown-link href="{{ route('register') }}">
                        {{ __('Register') }}
                    </x-jet-dropdown-link>
                </x-slot>

            </x-jet-dropdown>

            @endauth
        </div>

        <div class="hidden md:block">

            @livewire('dropdown-cart')


        </div>

    </div>

    <nav id="navigation-menu" :class="{'block': open, 'hidden': !open}"
        class="bg-trueGray-700 bg-opacity-25 w-full absolute hidden">

        {{-- Menu computadora --}}
        <div class="container h-full hidden md:block">
            <div x-on:click.away="close()" class="grid grid-cols-4 h-full relative">
                <ul class="bg-white">
                    @foreach ($categories as $category)
                    <li class="navigation-link text-trueGray-500 hover:bg-green-500 hover:text-white">
                        <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">

                            {{--<span class="flex justify-center w-9">
                                {!!$category->icon!!}
                            </span>
                            --}}
                            {{$category->name}}
                        </a>


                        <div class="navigation-submenu bg-gray-100 absolute w-3/4 h-full top-0 right-0 hidden">
                            <x-navigation-subcategories :category="$category" />
                        </div>

                    </li>
                    @endforeach
                </ul>

                <div class="col-span-3 bg-gray-100">
                    <x-navigation-subcategories :category="$categories->first()" />
                </div>
            </div>
        </div>

        {{-- menu mobil --}}
        <div class="bg-white h-full overflow-y-auto">

            <div class="container bg-gray-200 py-3 mb-2">
                @livewire('search')
            </div>
            <p class="text-trueGray-500 px-6 my-2">MI CARRITO</p>

            <div class="container flex justify-between items-center justify-center bg-green-500 py-3 mb-2 ">
                
            <p class="text-white px-2 my-2">Carrito de Compras</p>
                @livewire('dropdown-cart')
                 
               </div>
            
               <p class="text-trueGray-500 px-6 my-2">EMPRESAS</p>


            <ul>
                @foreach ($categories as $category)
                <li class="text-trueGray-500 hover:bg-green-500 hover:text-white">
                    <a href="{{route('categories.show', $category)}}" class="py-2 px-4 text-sm flex items-center">

                        <span class="flex justify-center w-9">
                            {!!$category->icon!!}
                        </span>

                        {{$category->name}}
                    </a>
                </li>
                @endforeach
            </ul>

            <p class="text-trueGray-500 px-6 my-2">USUARIOS</p>

            {{--@livewire('cart-mobil')--}}

            @auth
            @can('admin.producto')
                   <a href="{{ route('admin.index') }}"
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fas fa-users-cog"></i>
                </span>

                Administrador
                </a>
               @endcan
               
             @if (count(Auth::user()->roles))
            <a href="{{ route('profile.show') }}"
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="far fa-address-card"></i>
                </span>

                Perfil de Usuario
            </a>
            
           

            <a href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit() "
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fas fa-sign-out-alt"></i>
                </span>

                Cerrar sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
            
            @else
            <a href="{{ route('profile.show') }}"
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="far fa-address-card"></i>
                </span>

                Perfil de Usuario
            </a>
            
             <a href="{{ route('orders.index') }}"
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fab fa-product-hunt"></i>
                </span>

                Mis Pedidos
            </a>
            
        
           
            <a href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit() "
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fas fa-sign-out-alt"></i>
                </span>

                Cerrar sesión
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
            
            
            @endif
            
            @else
            <a href="{{ route('login') }}"
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fas fa-user-circle"></i>
                </span>

                Iniciar sesión
            </a>

            <a href="{{ route('register') }}"
                class="py-2 px-4 text-sm flex items-center text-trueGray-500 hover:bg-green-500 hover:text-white">

                <span class="flex justify-center w-9">
                    <i class="fas fa-fingerprint"></i>
                </span>

                registrate
            </a>
            @endauth
        </div>
    </nav>
</header>