<div id="crearPublicacion">
    <h2>Crea una nueva publicacion</h2>
    <form action="/crear-publicacion" method="POST">
        @csrf
        <input type="text" name="titulo" id="titulo" placeholder="titulo">
        <textarea name="cuerpo" id="cuerpo" placeholder="contenido..."></textarea>
        <button>Enviar</button>
    </form>
</div>