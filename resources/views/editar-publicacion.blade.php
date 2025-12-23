<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Publicaciones</title>
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/publicaciones.css">
</head>
<body>
    <x-header/>

    <div id="modificarPublicacion">
        <h2>Editar Publicacion</h2>
        <form action="/publicacion/{{ $publicacion->id }}" method="POST">
            @csrf
            @method("PATCH")
            <input type="text" name="titulo" id="titulo" value="{{ $publicacion->titulo }}">
        <textarea name="cuerpo" id="cuerpo">{{ $publicacion->cuerpo }}</textarea>
            <button>Guardar cambios</button>
        </form>
    </div>
</body>
</html>