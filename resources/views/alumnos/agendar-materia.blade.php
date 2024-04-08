<x-mi-layout titulo="Agendar Materia">
    <h1>Agendar Materia para {{$alumno->nombre}}</h1>

    <form action="{{route('alumno.relacionar-materia-alumno', $alumno)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="materia">Materia</label>
            <select name="materia_id[]" id="materia" class="form-control" multiple>
                @foreach ($materias as $materia )
                    <option value="{{$materia->id}}" @selected(false != array_search($materia->id, $materiasAlumno))>{{$materia->nombre}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="agendar" class="btn btn-primary">
        {{--<input type="hidden" name="alumno_id" value="{{$alumno->id}}">--}}

    </form>

</x-mi-layout>