@php
$recurso = "publicacion";
@endphp


<div id="publicaiones">
    @foreach ($publicaciones as $publicacion)
    <div class="publicacion">
        <h3><a href="/{{ $recurso }}/{{ $publicacion->id }}">{{ $publicacion["titulo"] }}</a></h3>
        <div>
            Creado por <strong>@if ($hayLink)
                <a href="/usuario/{{ $publicacion->usuario->id }}">{{ $publicacion->usuario->name }}</a>
                @else
                {{ $publicacion->usuario->name }}
                @endif</strong> el {{ $publicacion["created_at"] }}
            @if($publicacion["created_at"] != $publicacion["updated_at"])
                · Última actualización: {{ $publicacion["updated_at"] }}
            @endif
        </div>
        <pre>{{ $publicacion["cuerpo"] }}</pre>
        @auth @if ($publicacion->id_usuario == auth()->guard()->user()->id)
        <div class="acciones">
            <x-boton-update :recurso="$recurso" :elemento="$publicacion"/>
            <x-boton-delete :recurso="$recurso" :elemento="$publicacion"/>
        </div>
        @endif @endauth
    </div>
    @endforeach
</div>
