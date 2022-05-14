<x-app-layout>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Free open source Tailwind CSS Store template">
    <meta name="keywords" content="tailwind,tailwindcss,tailwind css,css,starter template,free template,store template, shop layout, minimal, monochrome, minimalistic, theme, nordic">
    
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css"/>
	
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:200,400&display=swap" rel="stylesheet">

    <style>
        .work-sans {
            font-family: 'Work Sans', sans-serif;
        }
                
        #menu-toggle:checked + #menu {
            display: block;
        }
        
        .hover\:grow {
            transition: all 0.3s;
            transform: scale(1);
        }
        
        .hover\:grow:hover {
            transform: scale(1.02);
        }
        
        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }
        
        .carousel-item {
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }
        
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #000;
            /*Set to match the Tailwind colour you want the active one to be */
        }
    </style>

</head>

<body class="bg-white text-gray-600 work-sans leading-normal text-base tracking-normal">

 

    <div class="carousel relative container mx-auto" style="max-width:1600px;">
        <div class="carousel-inner relative overflow-hidden w-full">
            <!--Slide 1-->
            <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
            <div class="carousel-item absolute opacity-0" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('img/slider1.gif');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-green-700 font-bold text-2xl my-4">Aprovecha las grandes Promociones!!!</p>
                               </div>
                    </div>

                </div>
            </div>
            <label for="carousel-3" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 2-->
            <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
            <div class="carousel-item absolute opacity-0 bg-cover bg-right" style="height:50vh;">
                <div class="block h-full w-full mx-auto flex pt-6 md:pt-0 md:items-center bg-cover bg-right" style="background-image: url('img/slider2.gif');">

                    <div class="container mx-auto">
                        <div class="flex flex-col w-full lg:w-1/2 md:ml-16 items-center md:items-start px-6 tracking-wide">
                            <p class="text-black text-2xl font-bold my-4">Tambo Lácteo mas cerca de ti </p>
                                                 </div>
                    </div>

                </div>
            </div>
            <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
            <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-gray-900  leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

            <!--Slide 3-->
            
            <!-- Add additional indicators for each slide-->
            <ol class="carousel-indicators">
                <li class="inline-block mr-3">
                    <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-yellow-400 hover:text-yellow-500">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
                <li class="inline-block mr-3">
                    <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-400 hover:text-gray-900">•</label>
                </li>
            </ol>

        </div>
    </div>






    <section class="bg-white py-8">


        <div class="  container mx-auto flex items-center flex-wrap pt-4 pb-12">

        @foreach ($promocion as $promo)
         @if($promo->rubro=='2')
        
            <div class="  h-90 w-90 shadow-red-700 w-full  bg-red-700  md:w-1/3 xl:w-1/4 p-6 flex flex-col pt-10  ">
                <a href="#">
                    <img class=" animate-pulse content-center h-60 w-80  rounded-lg hover:grow hover:shadow-lg" src="{{ Storage::url($promo->imagen)}}">
                    <div class=" pt-3 flex items-center justify-between shadow-lg">
                        <p class="  text-white">{{$promo->descripcion}}</p>
                       <a href="https://wa.me/591{{$promo->contacto_celular}}?text=Hola%20me%20interesa%20el%20producto%20en%20promocion%20{{$promo->descripcion}}%20">
                        <span><p class="text-white">WhatsApp</p></span>
                        <svg class="animate-bounce" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="24" height="24"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#05811a"><path d="M150.5,86c0,35.6255 -28.8745,64.5 -64.5,64.5c-11.70317,0 -22.67533,-3.1175 -32.1425,-8.56417l-25.19083,1.3975l3.8485,-21.27067c-6.95167,-10.29133 -11.01517,-22.704 -11.01517,-36.06267c0,-35.6255 28.8745,-64.5 64.5,-64.5c35.6255,0 64.5,28.8745 64.5,64.5z" opacity="0.3"></path><path d="M136.7185,35.31733c-13.51633,-13.5235 -31.49033,-20.97683 -50.63967,-20.984c-39.45967,0 -71.5735,32.0995 -71.58783,71.55917c-0.00717,12.61333 3.2895,24.92567 9.55317,35.776l-9.71083,35.99817l37.50317,-8.86517c10.45617,5.70467 22.22383,8.7075 34.2065,8.71467h0.02867c39.4525,0 71.56633,-32.10667 71.58783,-71.55917c0.01433,-19.12783 -7.42467,-37.109 -20.941,-50.63967zM86.05017,143.18283c-9.55317,-0.00717 -19.01317,-2.41517 -27.348,-6.966l-4.82317,-2.63017l-5.33917,1.26133l-14.104,3.3325l3.44717,-12.78533l1.548,-5.74767l-2.97417,-5.15283c-5.00233,-8.65733 -7.63967,-18.54733 -7.6325,-28.60217c0.01433,-31.54767 25.6925,-57.22583 57.24733,-57.22583c15.308,0.00717 29.6915,5.96983 40.506,16.77717c10.8145,10.82167 16.76283,25.20517 16.7485,40.49883c-0.01433,31.562 -25.69967,57.24017 -57.276,57.24017z"></path><path d="M121.10233,111.47033c-1.49067,4.17817 -8.7935,8.20583 -12.07583,8.49967c-3.28233,0.301 -6.35683,1.4835 -21.46417,-4.472c-18.18183,-7.16667 -29.66283,-25.80717 -30.5515,-26.99683c-0.89583,-1.19683 -7.30283,-9.6965 -7.30283,-18.49717c0,-8.80067 4.6225,-13.12933 6.26367,-14.91383c1.64117,-1.79167 3.57617,-2.236 4.773,-2.236c1.18967,0 2.3865,0 3.42567,0.043c1.27567,0.05017 2.6875,0.11467 4.02767,3.08883c1.591,3.54033 5.06683,12.384 5.51117,13.27983c0.44433,0.89583 0.74533,1.94217 0.1505,3.13183c-0.59483,1.18967 -0.89583,1.935 -1.7845,2.98133c-0.89583,1.04633 -1.87767,2.32917 -2.68033,3.13183c-0.89583,0.88867 -1.8275,1.86333 -0.78833,3.64783c1.04633,1.79167 4.62967,7.64683 9.94733,12.384c6.837,6.09167 12.59183,7.9765 14.3835,8.8795c1.79167,0.89583 2.83083,0.74533 3.87717,-0.4515c1.04633,-1.18967 4.472,-5.21733 5.66167,-7.009c1.18967,-1.79167 2.3865,-1.49067 4.02767,-0.89583c1.64117,0.59483 10.43467,4.9235 12.21917,5.81933c1.79167,0.89583 2.98133,1.34017 3.42567,2.0855c0.44433,0.73817 0.44433,4.3215 -1.04633,8.49967z"></path></g></g></svg>
                            </a>
                        </div>
                    <p class="   pt-1 text-center text-white">Precio: {{$promo->precio}} Bs.</p>
                </a>
            </div>
        
            @endif
            @endforeach
            

            </div>
       

    </section>



  

</body>

</html>

</x-app-layout>