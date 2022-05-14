<x-admin-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTICIAS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" >
        <h4 class="text-center my-5">Gestionar Promoción de Productos</h4>
        <p>Para la promoción del producto se debe poner el <b>estado</b>  del mismo</p>
        
        <div class="row" style="background-color: white; box-shadow:5px 6px 9px; border-radius:8px">
             
                    <div class="col-xl-12">
                        <form action="{{route('crud_promocion.index')}}" method="get" >
                            <div class="from-row">
                               <div class="col-sm-4 my-1 ">
                               <div class="container-fluid" id="main-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6"> <input type="text" class="form-control" name="texto"  value="{{$texto}}" ></div>
                                            <div class="col-3"> <input style="background-color:blue; color:white" type="submit" class="btn btn-primary " value="buscar"></div>
                                            <div class="col-3"><a href="{{route('crud_promocion.create')}}" class="btn btn-success">Nuevo</a></div>
                                        </div> 

                                    </div>
                                </div>
                                   
                                    
                                                                               
                                   
                               </div>     

                            </div>
                         
                        </form>

                    </div>
                    <div class="col-lx-12">
                        <div class="table-responsive" >
                            <table class="table table-striped border">
                                <thead style="background-color:#D5D5D5">
                                    <tr>
                                        <th>Opciones</th>
                                        <th>Id</th>
                                        <th>Titulo</th>
                                        <th>Precio</th>
                                        <th>Contacto Celular</th>
                                        <th>Estado</th>
                                        <th>Fecha</th>
                                        <th>Imagen</th>
 
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($promocionpro)<=0)
                                      <tr>
                                          <td colpan="8">No hay resultados</td>
                                     </tr>
                                    @else
                                @foreach($promocionpro as $promocion)
                                        <tr>
                            
                                            <td>

                                            <a href="{{route('crud_promocion.edit',$promocion->id)}}" class="btn btn-warning  btn-sm">Editar</a>
                                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$promocion->id}}">
                                            Eliminar   
                                            </button>
                                            </td>
                                            <td style="border: dimgray 3px;">{{$promocion->id}}</td>
                                            <td>{{$promocion->descripcion}}</td>
                                            <td>{{$promocion->precio}}</td>
                                            <td>{{$promocion->contacto_celular}}</td>
                                            <td>{{$promocion->rubro}}</td>
                                            <td>{{$promocion->fecha}}</td>
                                            <td>
                                               <img style=" width: 40px; height: 40px; border-radius:5px; align-content:center" src="{{ Storage::url($promocion->imagen)}}" width="15%" >
                                            </td>
                                    
                                       
                                        </tr>
                                        @include('crud_promocion.delete')
                            
                                @endforeach
                                @endif
                                </tbody>

                            </table>
                            {{$promocionpro->links()}}

                        </div>
                    </div>

        </div>

    </div>
</body>
</html>
</x-admin-layout>