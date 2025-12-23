<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="/assets/css/global.css">
    <link rel="stylesheet" href="/assets/css/publicaciones.css">
    <style>
        #publicaiones > .publicacion > h3 { color: black; border-bottom: 1px solid black; }
        #publicaiones > .publicacion > h3:hover { color: black; border-bottom: 1px solid black; }
    </style>
</head>
<body>
    <x-header/>

    @php
    $recurso = "publicacion";
    @endphp

    <div id="publicaiones">
        <div class="publicacion">
            <a href="/" style="font-weight: bold; color:red"> &LeftArrow; Volver a inicio</a>
        </div>
        <div class="publicacion">
            <h3>{{ $publicacion->titulo }}</h3>
            <div>
                Creado por <strong>{{ $usuario->name }}</strong> el {{ $publicacion->created_at }}
                @if($publicacion->created_at != $publicacion->updated_at)
                    · Última actualización: {{ $publicacion->updated_at }}
                @endif
            </div>
            <pre>{{ $publicacion->cuerpo }}</pre>

            @auth @if ($publicacion->id_usuario == auth()->guard()->user()->id)
            <div class="acciones">
                <x-boton-update :recurso="$recurso" :elemento="$publicacion"/>
                <x-boton-delete :recurso="$recurso" :elemento="$publicacion"/>
            </div>
            @endif @endauth
        </div>
    </div>

</body>
</html>
