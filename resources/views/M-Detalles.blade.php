<!-- Modal -->
<div class="modal fade" id="ModalDetalles-{{ $id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalDetalles" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Detalles libro.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @foreach ($resultRec as $consulta)
            @if ($consulta->idLibros == $id)
            <div class="modal-body">
                <form method="post" action="{{ route('libro.update',$consulta->idLibros) }}">
                            @csrf
                            {!! method_field('PUT') !!}
                            <div class="mb-3">
                                <label class="form-label "><p class="fw-bold">TITULO:</p> {{$consulta->Titulo }} </label>
                            </div>

                            <div class="mb-3">
                                <label class="form-label"> <p class="fw-bold">ISBN:</p>{{ $consulta->ISBN }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><p class="fw-bold">AUTOR:</p>{{ $consulta->Autor }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><p class="fw-bold">PAGINAS:</p>{{ $consulta->Paginas }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><p class="fw-bold">EDITORIAL:</p>{{ $consulta->Editorial }}</label>
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> <p class="fw-bold">EMAIL:</p>{{ $consulta->Email }}</label>
                            </div>

            </div>
            @endif
            @endforeach
            <div class="modal-footer">

                <a href="{{ route('libros.index')}}" class="btn btn-danger">Regresar</a>
            </form >
            </div>
        </div>
    </div>
</div>
