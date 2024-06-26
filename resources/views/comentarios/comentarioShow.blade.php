<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del comentario</title>
</head>
<body>
    <a href="{{route('comentario.index')}}">Inicio</a>
    <h1>Detalle del comentario</h1>
    <ul>
        <li>Nombre: {{$comentario->nombre}}</li>
        <li>Correo: {{$comentario->correo}}</li>
        <li>Comentario: {{$comentario->comentario}}</li>
        <li>Ciudad: {{$comentario->ciudad}}</li>
    </ul>

    <h1>Archivos</h1>
    <ul>
        @foreach ($comentario->archivos as $archivo )
            <li>
                <a href="{{route('archivo.download', $archivo)}}">
                    {{$archivo->nombre_original}}
                    <img src="{{asset(\Storage::url($archivo->ubicacion))}}" alt="" width="300px">
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>