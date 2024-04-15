<x-mail::message>
# Hola {{$alumno->nombre}}
<x-mail::panel>
Estas son las materias a las que estas inscrito

@foreach ($materias as $materia)
    -{{$materia->nombre}}
@endforeach
</x-mail::panel>
    
</x-mail::message>