<!-- Modal -->
<div class="modal fade" id="ModalEliminarC-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalEliminarC" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar Cliente.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($resultCli as $consulta)
            @if ($consulta->idCliente == $id)
            <div class="modal-body">
                <form method="post" action="{{ route('cliente.update',$consulta->idCliente) }}">
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="mb-3">
                                <label class="form-label ">{{$consulta->Nombre }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->Email }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">{{ $consulta->NoIne }}</label>
                            </div>


             </div>
            @endif
            @endforeach
            <div class="modal-footer">
                <form action="{{ route('clientes.destroy',$consulta->idCliente) }}" method="POST">
                    @csrf
                    @method('delete')
                <button type="submit"  class="btn btn-success">Si, eliminalo</button>
                </form>
                <a href="{{ route('clientes.index')}}" class="btn btn-danger">No, regresame</a>
            </form >
            </div>
        </div>
    </div>
</div>
