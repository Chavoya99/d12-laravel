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
    <h1>Contacto</h1>
    <form action="/contacto_guardar" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <label for="correo">Correo</label>
        <input type="text" name="correo">
        <br>
        <label for="comentario">Comentario</label>
        <textarea name="comentario" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="enviar">
    </form>

</body>
</html>