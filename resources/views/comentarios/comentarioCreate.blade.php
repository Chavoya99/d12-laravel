<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <a href="/info">Información</a>
    <hr>
    <h1>Comentario</h1>
    @include('parciales.form-error')
    <form action="{{route('comentario.store')}}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        @error('nombre')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="correo" >Correo</label>
        <input type="email" name="correo" value="{{old('correo')}}">
        @error('correo')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <label for="comentario">Comentario</label>
        <textarea name="comentario" cols="30" rows="10">{{old('comentario')}}</textarea>
        @error('comentario')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>

        <label for="ciudad">Ciudad</label>
        <select name="ciudad" id="">
            <option value="GDL" @selected(old('ciudad')== 'GDL')>Guadalajara</option>
            <option value="ZAPOPAN" @selected(old('ciudad')== 'ZAPOPAN')>Zapopan</option>
            <option value="TONALÁ" @selected(old('ciudad')== 'TONALÁ')>Tonalá</option>
        </select>
        @error('ciudad')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>