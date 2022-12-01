@extends('welcome')
@section('contenido')

 @if (session()->has('confirmacion'))

        {!! "<script> swal( 'Correcto',  'Tu recuerdo se guardo!' ,  'success' ) </script> "  !!}


    @endif

<div class="container col-md-6 mt-4 cardme2 cont">
    <div class="card text-center font-monospace cardme2">
        <div class="card-header">
            <h3>Registro Cliente</h3>
        </div>
        <form method="post" action="{{ route('cliente.store') }}">
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
                    <input type="text" class="form-control" value="{{old('TxtEmail')  }}" id="floatingInput" name="TxtEmail" placeholder="text">
                    <label for="floatingInput">Email</label>
                </div>
                @if ($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('TxtEmail') }}</p>
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
