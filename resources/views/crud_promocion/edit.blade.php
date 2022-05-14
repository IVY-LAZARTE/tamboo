<x-admin-layout>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR Promociones de Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h4 class="text-center my-4">Editar Promoción de Productos</h4>
        <div class="row" style="background-color: white; box-shadow:5px 6px 9px; border-radius:8px">
            <div class="col-xl-12">
                <form action="{{route('crud_promocion.update',$promocionpro->id)}}" method="post" enctype="multipart/form-data">
                @csrf   
                @method('PUT')
                <div class="form-group">
                        <label for="descripcion"><b>Titulo de la Promoción del producto</b></label>
                        <input type="text" class="form-control" name="descripcion" required max-length="100"  value="{{$promocionpro->descripcion}}">
                       
                    </div>
                    <div class="form-group">
                        <label for="precio"><b>precio del Producto</b></label>
                        <input type="number" class="form-control" name="precio"  value="{{$promocionpro->precio}}">
                       
                    </div>
                    <div class="form-group">
                        <label for="contacto_celular"><b>Teléfono del productor</b></label>
                        <input type="number" class="form-control" name="contacto_celular"  value="{{$promocionpro->contacto_celular}}">
                       
                    </div>

                 
                    <div class="form-group">
                        <label for="rubro" style="color: red;"><b>Estado Actual</b></label>
                        <input type="text" class="form-control" name="rubro"  value="{{$promocionpro->rubro}}" disabled>
                       
                    </div>
                    <div class="form-group">
                        <label for="rubro"><b>Editar Estado</b></label> <br>
                        <label for="rubro">Borrador (1) </label>
                        <input type="radio" id="rubro" name="rubro" value="1">
                        
                        <label for="rubro">Promocionar (2)</label>
                            <input type="radio" id="rubro" name="rubro" value="2">
                           
                    </div>
     
                    <div class="form-group">
                        <label for="fecha"><b>Fecha</b></label>
                        <input type="date" class="form-control" name="fecha" value="{{$promocionpro->fecha}}">
                       
                    </div>
                    <div class="form-group">
                        <label for="imagen"><b>Imagen</b></label>
                        <img id="imagen" style="max-height:300px">
                        <p>Seleccione la imagen</p>
                        <input id="imagen" class="form-control" name="imagen" type="file" class="form-control" value="{{$promocionpro->imagen}}" >

                       
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-primary my-2" value="guardar" id="">
                        <input type="reset" class="btn btn-default" value="Borrar">
                        <a style="color:gainsboro" href="javascript:history.back()" class="btn btn-secondary">Ir a listado</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
</x-admin-layout>