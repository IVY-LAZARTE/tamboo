<x-app-layout>

   
 
 
    <!-- overlay -->
    <div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">
    
    <!-- modal -->
    <div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">
    
        <!-- button close -->
      
    
        <!-- header -->
        <div class="px-4 py-3 border-b border-gray-200">
        <h2 class="text-xl font-semibold text-gray-600">Title</h2>
        </div>
    
        <!-- body -->
        <div class="w-full p-3">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores, quis tempora! Similique, explicabo quaerat maxime corrupti tenetur blanditiis voluptas molestias totam? Quaerat laboriosam suscipit repellat aliquam blanditiis eum quos nihil.
        </div>
    
        <!-- footer -->
        <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
        <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">Save</button>
        <button 
            onclick="openModal(false)"
            class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none"
        >Close</button>
        </div>
    </div>
    
    </div>
   
       <div class="container py-8">
           @foreach ($categories as $category)
           
               <section class="mb-6">
                   <div class="flex items-center mb-2">
                       <h1 class="text-lg uppercase font-semibold text-gray-50">
                           {{$category->name}}
                       </h1>
   
                       <a href="{{route('categories.show', $category)}}" class="text-white-500 hover:text-red-400 hover:underline ml-2 font-semibold">Ver más</a>
   
                   </div>
   
                   @livewire('category-products', ['category' => $category])
               </section>
   
           @endforeach
       </div>
   
       
       @push('script')
           
           <script>
   
               Livewire.on('glider', function(id){
   
                   new Glider(document.querySelector('.glider-' + id), {
                       slidesToShow: 1,
                       slidesToScroll: 1,
                       draggable: true,
                       dots: '.glider-' + id + '~ .dots',
                       arrows: {
                           prev: '.glider-' + id + '~ .glider-prev',
                           next: '.glider-' + id + '~ .glider-next'
                       },
                       responsive: [
                           {
                               breakpoint: 640,
                               settings: {
                                   slidesToShow: 2.5,
                                   slidesToScroll: 2,
                               }
                           },
                           {
                               breakpoint: 768,
                               settings: {
                                   slidesToShow: 3.5,
                                   slidesToScroll: 3,
                               }
                           },
   
                           {
                               breakpoint: 1024,
                               settings: {
                                   slidesToShow: 4.5,
                                   slidesToScroll: 4,
                               }
                           },
   
                           {
                               breakpoint: 1280,
                               settings: {
                                   slidesToShow: 5.5,
                                   slidesToScroll: 5,
                               }
                           },
                       ]
                   });
   
               });
                   
           </script>
          
       @endpush
       
   </x-app-layout>