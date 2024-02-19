<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado comentario</title>
</head>
<body>
    <a href="{{route('comentario.create')}}">Nuevo comentario</a>
    <h1>Lista de comentarios</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Ciudad</th>
                <th>Creado / enviado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comentarios as  $comentario)
                <tr>
                    <td>{{$comentario->nombre}}</td>
                    <td>{{$comentario->correo}}</td>
                    <td>{{$comentario->ciudad}}</td>
                    <td>{{$comentario->created_at}}</td>
                    <td>
                        <a href="{{route('comentario.show', $comentario->id)}}">Detalle</a>
                    </td>
                    
                </tr> 
            @endforeach
            
        </tbody>
    </table>
</body>
</html>