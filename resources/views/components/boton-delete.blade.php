<form action="/{{ $recurso }}/{{ $elemento->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" >Borrar</button>
</form>