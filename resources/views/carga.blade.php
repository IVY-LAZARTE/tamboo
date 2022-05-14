<x-app-layout>
<div class="min-w-screen h-screen animated fadeIn faster  fixed  left-0 top-0 flex justify-center items-center inset-0 z-50 outline-none focus:outline-none bg-no-repeat bg-center bg-cover"  style="background-image: url(img/frontis.png);" id="modal_overlay" velue="1">
        <div class="absolute bg-black opacity-80 inset-0 z-0"></div>
     <div class="w-full  max-w-lg p-5 relative mx-auto my-auto rounded-xl shadow-lg  bg-white ">
       <!--content-->
       <div class="">
         <!--body-->
        
         @if ($noti_id == null)
         <div class="text-center">
          <h1><b>No hay Noticias disponibles</b></h1>
        </div>
         @else
        

         <div class="text-center p-5 flex-auto justify-center">
          <h2 class="text-xl font-bold py-5 ">{{$noti_id->titulo_noticia}} <p class="text-sm text-gray-500 px-8">{{$noti_id->fecha}}</p>    </h3>
          <img style="width: 250px; height:250px" class="w-16 h-16 flex items-center text-red-500 mx-auto" src="{{ Storage::url($noti_id->imagen)}}" alt="">

           
            
</div>
         @endif
         
         <div class="  mt-2 text-center space-x-4 md:block">
         
 
             <a href="welcome">
             <button  onclick="openModal(false)" class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-5 py-2 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600"> &cross; Cerrar</button>
             </a>
         </div>
         
   
       </div>
     </div>
   </div>

   <script>
            const modal_overlay = document.querySelector('#modal_overlay');
            const modal = document.querySelector('#modal');
            
            function openModal (value){
                const modalCl = modal.classList
                const overlayCl = modal_overlay
            
                if(value==1){
                  
                overlayCl.classList.remove('hidden')
                setTimeout(() => {
                    modalCl.remove('opacity-0')
                    modalCl.remove('-translate-y-full')
                    modalCl.remove('scale-150')
                }, 100);
                } else {
                modalCl.add('-translate-y-full')
                setTimeout(() => {
                    modalCl.add('opacity-0')
                    modalCl.add('scale-150')
                }, 100);
                setTimeout(() => overlayCl.classList.add('hidden'), 300);
                }
            }
            openModal(true)
            </script>
</x-app-layout>