<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reporte de Pedido</title>
</head>

<body>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" colspan="2"> <img src="img/tambo.png" alt="" width="300" height="90"></th>
                    <td scope="col" colspan="2">
                        <p>Calle Comercio Esq. Ayacucho <br>
                            Nº 1200<br>
                            Telefono: 2204127 - 2204340</p>
                    </td>
                </tr>
            </thead>
            <tbody>
              <tr>
                <th colspan="4" class="text-center"><h3>REPORTE DE PEDIDO</h3></th>
              </tr>
                <tr>
                    <th>Fecha del Pedido:</th>
                    <td>{{$fecha}}</td>
                    <th>No. de Pedido:</th>
                    <td> {{ $orden->id }}</td>
                </tr>
                <tr>
                    <th scope="row" colspan="4">* DATOS DEL CLIENTE</th>
                </tr>
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $orden->contact }}</td>
                    <th>Telefono</th>
                    <td>{{ $orden->phone }}</td>
                </tr>
                <tr bgcolor="#FA7559">
                <th>Producto</th>

                <th>Cantidad</th>

                <th>Imagen</th>

                <th>Total</th>
                </tr>
                @foreach ($items as $item)
                <tr colspan="9">

                    <td>{{ $item->name }}</td>
                    <td>{{ $item->qty }}</td>
                    <td style="text-align:center"><img src="{{ $item->options->image }}" alt="" width="50"
                      height="50"></td>
                    <td> Bs.{{ $item->price * $item->qty }}</td>
                </tr>
            @endforeach
            <tr>
              <td colspan="3" style="text-align:center"><b>Total a Pagar</b></td>
              <td style="text-align:center">Bs. {{$orden->total}}</td>
            </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
