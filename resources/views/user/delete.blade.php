<!-- Modal -->
<div class="modal fade" id="modal-delete {{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('user.destroy', $users->id)}}" method="POST">
            @csrf
            @method('DELETE')
            
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar registro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Seguro desea eliminar el registro {{$user->name}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-danger btn-sm" value="Eliminar"> 
        </div>
      </div>
    </form>
    </div>
  </div>