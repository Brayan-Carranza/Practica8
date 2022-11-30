<!-- Modal -->
<div class="modal fade" id="ModalAgregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="ModalAgregar" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content cardme3">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar Libro.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="post" action="{{ route('libro.store') }}">
                @csrf
                <div class="mb-3">

                    <label class="form-label ">Titulo: </label>
                    <input type="text" class="form-control" value="{{old('TxtTitulo')  }}" name="TxtTitulo">
                    @if($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('TxtTitulo') }}</p>
                     @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">ISBN: </label>
                    <input type="text" class="form-control"value="{{old('TxtISBN')  }}" name="TxtISBN">
                    @if ($errors->all())
                    <p class=" text-danger fst-italic">{{$errors->first('TxtISBN')}}</p>
                    @endif
                </div>
                <div class="mb-3">

                    <label class="form-label ">Autor: </label>
                    <input type="text" class="form-control"value="{{old('TxtAutor')  }}" name="TxtAutor">
                    @if($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('TxtAutor') }}</p>
                     @endif
                </div>
                <div class="mb-3">

                    <label class="form-label ">Paginas: </label>
                    <input type="text" class="form-control" value="{{old('TxtPaginas')  }}"name="TxtPaginas">
                    @if($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('TxtPaginas') }}</p>
                     @endif
                </div>
                <div class="mb-3">

                    <label class="form-label ">Editorial: </label>
                    <input type="text" class="form-control" value="{{old('TxtEditorial')  }}"name="TxtEditorial">
                    @if($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('TxtEditorial') }}</p>
                     @endif
                </div>
                <div class="mb-3">

                    <label class="form-label ">Email: </label>
                    <input type="text" class="form-control" value="{{old('TxtEmail')  }}"name="TxtEmail">
                    @if($errors->all())
                    <p class="text-danger fst-italic">{{ $errors->first('TxtEmail') }}</p>
                     @endif
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Guardar <i class="bi bi-check"></i></button>
            </form>
            <a href="{{ route('libros.index')}}" class="btn btn-danger">Cancelar <i class="bi bi-x-lg"></i> </a>
        </form >
            </div>
                 </form >
        </div>
    </div>
</div>
