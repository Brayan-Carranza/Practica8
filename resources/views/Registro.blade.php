@extends('welcome')

@section('contenido')


    @if (session()->has('confirmacion'))
        {!! '<script> swal( "Todo correcto", "Libro ' .
            session()->get('confirmacion') .
            ' ah sido registrado con éxito",  "success" ) </script> ' !!}
    @endif
    <div class="container col-md-6 mt-4 cardme cont">
        <div class="card text-center font-monospace cardme">
            <div class="card-header">
                <h3>Registro</h3>
            </div>
            <form method="post" action="{{ route('libro.store') }}">
                @csrf
                <div class="card-body">


                    <div class="form-floating mb-3 m-sm-2">
                        <input type="text" class="form-control"value="{{old('TxtISBN')  }}" id="floatingInput" name="TxtISBN" placeholder="text">
                        <label for="floatingInput">ISBN</label>
                      </div>
                    @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('TxtISBN') }}</p>
                    @endif
                    <div class="form-floating mb-3 m-sm-2">
                        <input type="text" class="form-control"value="{{old('TxtTitulo')  }}" id="floatingInput" name="TxtTitulo" placeholder="text">
                        <label for="floatingInput">Titulo</label>
                      </div>
                    @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('TxtTitulo') }}</p>
                    @endif


                    <div class="form-floating mb-3 m-sm-2">
                        <input type="text" class="form-control" value="{{old('TxtAutor')  }}"id="floatingInput" name="TxtAutor" placeholder="text">
                        <label for="floatingInput">Autor</label>
                      </div>
                      @if ($errors->all())
                          <p class="text-danger fst-italic">{{ $errors->first('TxtAutor') }}</p>
                  @endif


                    <div class="form-floating mb-3 m-sm-2">
                        <input type="text" class="form-control"value="{{old('TxtPaginas')  }}" id="floatingInput" name="TxtPaginas" placeholder="text">
                        <label for="floatingInput">Paginas</label>
                      </div>
                    @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('TxtPaginas') }}</p>
                    @endif


                    <div class="form-floating mb-3 m-sm-2">
                        <input type="text" class="form-control" value="{{old('TxtEditorial')  }}"id="floatingInput" name="TxtEditorial" placeholder="text">
                        <label for="floatingInput">Editorial</label>
                      </div>
                    @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('TxtEditorial') }}</p>
                    @endif


                    <div class="form-floating mb-3 m-sm-2">
                        <input type="text" class="form-control" value="{{old('TxtEmail')  }}"id="floatingInput" name="TxtEmail" placeholder="text">
                        <label for="floatingInput">E-mail</label>
                      </div>
                    @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('TxtEmail') }}</p>
                    @endif

                        <button type="submit" class="btn btn-danger">Guardar Registro</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
