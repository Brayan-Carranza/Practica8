<!-- Modal -->
<div class="modal fade" id="ModalEliminar-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar libro.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($resultRec as $consulta)
            @if ($consulta->idLibros == $id)
            <div class="modal-body">
                <form method="post" action="{{ route('libro.update',$consulta->idLibros) }}">
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="mb-3">
                                <label class="form-label ">{{$consulta->Titulo }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->ISBN }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Autor }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Paginas }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Editorial }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Email }}</label>
                            </div>

            </div>
            @endif
            @endforeach
            <div class="modal-footer">
                <form action="{{ route('libros.destroy',$consulta->idLibros) }}" method="POST">
                    @csrf
                    @method('delete')
                <button type="submit"  class="btn btn-success">Si, eliminalo</button>
                </form>
                <a href="{{ route('libros.index')}}" class="btn btn-danger">No, regresame</a>
            </form >
            </div>
        </div>
    </div>
</div>
