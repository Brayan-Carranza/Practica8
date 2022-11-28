@extends('welcome')
@section('contenido')

@if (session()->has('confirmacion'))
    {{-- {!! '<div class='alert alert-success fade show' role='alert'>
    <strong>Felicidades!</strong> Su cliente ah sido registrado correctamente.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>;</span>
    </button>
  </div>'' !!}) --}}

  <div class="alert alert-danger">
    Porno
  </div>

@endif

<div class="container col-md-6 mt-4 cardme cont">
    <div class="card text-center font-monospace cardme">
        <div class="card-header">
            <h3>Registro Cliente</h3>
        </div>
        <form method="post" action="guardarCliente">
            @csrf
            <div class="card-body">

                <div class="form-floating mb-3 m-sm-2">
                    <input type="text" class="form-control" value="{{old('TxtNombre')  }}"id="floatingInput" name="TxtNombre" placeholder="text">
                    <label for="floatingInput">Nombre</label>
                </div>
                @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('TxtNombre') }}</p>
                @endif
                <div class="form-floating mb-3 m-sm-2">
                    <input type="text" class="form-control" value="{{old('TxtE-mail')  }}" id="floatingInput" name="TxtE-mail" placeholder="text">
                    <label for="floatingInput">E-mail</label>
                </div>
                @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('TxtE-mail') }}</p>
                @endif
                <div class="form-floating mb-3 m-sm-2">
                    <input type="text" class="form-control" value="{{old('TxtINE')}}" id="floatingInput" name="TxtINE" placeholder="text">
                    <label for="floatingInput">No. INE</label>
                </div>
                    @if ($errors->all())
                            <p class="text-danger fst-italic">{{ $errors->first('TxtINE') }}</p>
                    @endif

                    <button type="submit" class="btn btn-danger">Guardar Cliente</button>

                </div>
            </div>
        </form>
</div>

@stop
