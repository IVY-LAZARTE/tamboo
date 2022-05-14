<x-admin-layout>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <h4 class="text-center my-4">Editar Noticia</h4>
        <div class="row" style="background-color: white; box-shadow:5px 6px 9px; border-radius:8px">
            <div class="col-xl-12">
                <form action="{{route('crud_noticias.update',$noticias->id)}}" method="post" >
                @csrf   
                @method('PUT')
                <div class="form-group">
                        <label for="titulo_noticia"><b>Titulo de Noticia</b></label>
                        <input type="text" class="form-control" name="titulo_noticia" required max-length="100" placeholder="Introduza el titulo de la noticia" value="{{$noticias->titulo_noticia}}">
                       
                    </div>
                    <div class="form-group">
                        <label for="tipo_noticia"><b>Tipo de Noticia</b></label>
                        <input type="text" class="form-control" name="tipo_noticia" required max-length="100" placeholder="Introduzca el tipo de noticia" value="{{$noticias->tipo_noticia}}">
                       
                    </div>
                    <div class="form-group">
                        <label for="imagen"><b>Imagen</b></label>
                        <img id="imagen" style="max-height:300px">
                        <p>Seleccione la imagen</p>
                        <input id="imagen"  name="imagen" type="file" class="form-control" value="{{$noticias->imagen}}" >

                       
                    </div>
                    <div class="form-group">
                        <label for="fecha"><b>Fecha</b></label>
                        <input type="date" class="form-control" name="fecha" value="{{$noticias->fecha}}">
                       
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