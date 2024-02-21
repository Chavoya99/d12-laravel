<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar comentario</title>
</head>
<body>
<a href="/info">Información</a>
    <hr>
    <h1>Comentario</h1>
    @include('comentarios.parciales.form-error')
    <form action="{{route('comentario.update', $comentario)}}" method="POST">
        @csrf
        @method('PATCH')
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre') ?? $comentario->nombre}}">
        <br>
        <label for="correo">Correo</label>
        <input type="text" name="correo" value="{{old('correo') ?? $comentario->correo}}">
        <br>
        <label for="comentario">Comentario</label>
        <textarea name="comentario" cols="30" rows="10">{{old('comentario') ?? $comentario->comentario}}</textarea>
        <br>
        <label for="ciudad">Ciudad</label>
        <select name="ciudad" id="">
            <option value="GDL" @selected(old('ciudad')  ?? $comentario->ciudad == 'GDL')>Guadalajara</option>
            <option value="ZAPOPAN" @selected(old('ciudad') ?? $comentario->ciudad == 'ZAPOPAN')>Zapopan</option>
            <option value="TONALÁ" @selected(old('ciudad') ?? $comentario->ciudad == 'TONALÁ')>Tonalá</option>
        </select>
        <br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>