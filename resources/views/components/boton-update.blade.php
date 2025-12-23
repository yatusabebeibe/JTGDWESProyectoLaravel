<form action="/{{ $recurso }}/{{ $elemento->id }}" method="POST">
    @csrf
    @method('PATCH')
    <button type="submit" >Actualizar</button>
</form>