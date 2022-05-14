<div>

    {{-- @php
    // SDK de Mercado Pago
    require base_path('vendor/autoload.php');
    // Agrega credenciales
    MercadoPago\SDK::setAccessToken(config('services.mercadopago.token'));

    // Crea un objeto de preferencia
    $preference = new MercadoPago\Preference();

    $shipments = new MercadoPago\Shipments();

    $shipments->cost = $order->shipping_cost;
    $shipments->mode = "not_specified";

    $preference->shipments = $shipments;

    // Crea un ítem en la preferencia

    foreach ($items as $product) {
    $item = new MercadoPago\Item();
    $item->title = $product->name;
    $item->quantity = $product->qty;
    $item->unit_price = $product->price;

    $products[] = $item;
    }

    $preference->back_urls = array(
    "success" => route('orders.pay', $order),
    "failure" => "http://www.tu-sitio/failure",
    "pending" => "http://www.tu-sitio/pending"
    );
    $preference->auto_return = "approved";

    $preference->items = $products;
    $preference->save();
    @endphp --}}


    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-6 container py-6">

        <div class="order-2 lg:order-1 xl:col-span-3">
            <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
                <p class="text-gray-700 uppercase"><span class="font-semibold">Número de orden:</span>
                    Orden-{{ $order->id }}</p>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
                <div class="grid grid-cols-2 gap-6 text-gray-700">
                    <div>
                        <p class="text-lg font-semibold uppercase">Envío</p>

                        @if ($order->envio_type == 1)
                        <p class="text-sm">Los productos deben ser recogidos en la tienda</p>

                        @else
                        <p class="text-sm">Los productos Serán enviados a:</p>
                        <p class="text-sm">{{ $envio->address }}</p>
                        <p>{{ $envio->department }} - {{ $envio->city }} - {{ $envio->district }}
                        </p>
                        @endif


                    </div>

                    <div>
                        <p class="text-lg font-semibold uppercase">Datos de contacto</p>

                        <p class="text-sm">Persona que recibirá el producto: {{ $order->contact }}</p>
                        <p class="text-sm">Teléfono de contacto: {{ $order->phone }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg p-6 text-gray-700 mb-6">
                <p class="text-xl font-semibold mb-4">Resumen</p>

                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Precio</th>
                            <th>Cant</th>
                            <th>Total</th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-200">
                        @foreach ($items as $item)
                        <tr>
                            <td>
                                <div class="flex">
                                    <img class="h-15 w-20 object-cover mr-4" src="{{ $item->options->image }}" alt="">
                                    <article>
                                        <h1 class="font-bold">{{ $item->name }}</h1>
                                        <div class="flex text-xs">

                                            @isset($item->options->color)
                                            Color: {{ __($item->options->color) }}
                                            @endisset

                                            @isset($item->options->size)
                                            - {{ $item->options->size }}
                                            @endisset
                                        </div>
                                    </article>
                                </div>
                            </td>

                            <td class="text-center">
                                {{ $item->price }} Bs.
                            </td>

                            <td class="text-center">
                                {{ $item->qty }}
                            </td>

                            <td class="text-center">
                                {{ $item->price * $item->qty }} Bs.
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>



        </div>

        <div class="order-1 lg:order-2 xl:col-span-2">
            <div class="bg-white rounded-lg shadow-lg px-6 pt-6">
                <div class="flex justify-between items-center mb-4">
                    <img class="h-22 w-90" src="{{ asset('img/MC_VI_DI_2-1.jpeg') }}" alt="">

                </div>
                <div class="w-full">
                    <div class="text-gray-700">
                        {{-- <p class="text-sm font-semibold">
                            Subtotal: {{ $order->total - $order->shipping_cost }} Bs.
                        </p>
                        <p class="text-sm font-semibold">
                            Envío: {{ $order->shipping_cost }} Bs.
                        </p> --}}
                        <p class="text-lg font-semibold uppercase">
                            Total: {{ $order->total }} Bs.
                        </p>

                        <div class="cho-container">

                        </div>
                    </div>
                </div>

                <x-jet-button class="bg-red-700 w-full">
                    <a href="{{ route('descargarPDFOrden',$order->id) }}" class="btn btn-success btn-sm" target="_blank">Descargar Reporte de Pedido</a>
                </x-jet-button>

                <div class="py-2 w-full">
                    @livewire('create-comprobante')
                </div>

                <div class="py-2 w-full">
                    <button
                        class="flex items-center justify-center w-full px-8 py-1 text-white bg-green-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-red-500 focus:bg-red-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40"
                            viewBox="0 0 50 50" style=" fill:#ffffff;">
                            <path
                                d="M 25 2 C 12.318 2 2 12.318 2 25 C 2 28.96 3.0228906 32.853062 4.9628906 36.289062 L 2.0371094 46.730469 C 1.9411094 47.073469 2.03325 47.440312 2.28125 47.695312 C 2.47225 47.892313 2.733 48 3 48 C 3.08 48 3.1612344 47.989703 3.2402344 47.970703 L 14.136719 45.271484 C 17.463719 47.057484 21.21 48 25 48 C 37.682 48 48 37.682 48 25 C 48 12.318 37.682 2 25 2 z M 16.642578 14 C 17.036578 14 17.428437 14.005484 17.773438 14.021484 C 18.136437 14.039484 18.624516 13.883484 19.103516 15.021484 C 19.595516 16.189484 20.775875 19.058563 20.921875 19.351562 C 21.069875 19.643563 21.168656 19.984047 20.972656 20.373047 C 20.776656 20.762047 20.678813 21.006656 20.382812 21.347656 C 20.086813 21.688656 19.762094 22.107141 19.496094 22.369141 C 19.200094 22.660141 18.892328 22.974594 19.236328 23.558594 C 19.580328 24.142594 20.765484 26.051656 22.521484 27.597656 C 24.776484 29.583656 26.679531 30.200188 27.269531 30.492188 C 27.859531 30.784188 28.204828 30.734703 28.548828 30.345703 C 28.892828 29.955703 30.024969 28.643547 30.417969 28.060547 C 30.810969 27.477547 31.204094 27.572578 31.746094 27.767578 C 32.288094 27.961578 35.19125 29.372062 35.78125 29.664062 C 36.37125 29.956063 36.766062 30.102703 36.914062 30.345703 C 37.062062 30.587703 37.062312 31.754234 36.570312 33.115234 C 36.078313 34.477234 33.717984 35.721672 32.583984 35.888672 C 31.565984 36.037672 30.277281 36.10025 28.863281 35.65625 C 28.006281 35.38625 26.907047 35.028734 25.498047 34.427734 C 19.575047 31.901734 15.706156 26.012047 15.410156 25.623047 C 15.115156 25.234047 13 22.46275 13 19.59375 C 13 16.72475 14.524406 15.314469 15.066406 14.730469 C 15.608406 14.146469 16.248578 14 16.642578 14 z">
                            </path>
                        </svg>
                        <a
                            href="https://api.whatsapp.com/send?phone=591{{ $order->responsable }}&text=Hola,%20vi%20sus%20productos%20en%20la%20pagina%20y%20quisiera%20saber%20m%C3%A1s%20detalles">
                            <span class="mx-1">
                                Contactar con el Responsable de Ventas
                            </span>
                        </a>
                    </button>
                </div>


            </div>


        </div>


    </div>


    {{-- <script src="https://sdk.mercadopago.com/js/v2"></script>

    <script>
        const mp = new MercadoPago("{{config('services.mercadopago.key')}}", {
                locale: 'es-AR'
          });
        
          mp.checkout({
              preference: {
                  id: '{{ $preference->id }}'
              },
              render: {
                    container: '.cho-container', 
                    label: 'Pagar',
              }
        });

    </script> --}}

    @push('script')



    <script src="https://www.paypal.com/sdk/js?client-id={{ config('services.paypal.client_id') }}">
        // Replace YOUR_CLIENT_ID with your sandbox client ID

    </script>


    <script>
        paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: "{{ $order->total }}"
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {

                        Livewire.emit('payOrder');

                        /* console.log(details);

                        alert('Transaction completed by ' + details.payer.name.given_name); */
                    });
                }
            }).render('#paypal-button-container'); // Display payment options on your web page

    </script>

    @endpush
</div>