<x-mi-layout titulo="Detalle alumno">
    <h1>Detalle alumno: {{$alumno->nombre}}</h1>

    <ul>
        @foreach ($alumno->materias as  $materia)
            <li>{{$materia->nombre}}</li>            
        @endforeach
    </ul>


</x-mi-layout>