@extends('welcome')
<!-- manda a llamar lo que contiene la plantilla-->
    @section('contenido')

    @if (session()->has('confirmacion'))

        {!! "<script> swal( 'Correcto',  'Tu libro se guardo!' ,  'success' ) </script> "  !!}


    @endif

{{-- Tarjeta en Bootstrap --}}
    <div class="container col-md-6 " >
        <h1 class="display-4 text-center mt-5 mb-5 ">Editar Cliente</h1>

<!-- interacion con el foreach-->
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Formulario Incompleto revisalo bien</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endforeach
        @endif -->
        <div class="card text-center mb-5 cardme1">

            <div class="card-header">
              <h4> <p class="fw-bold">FE DE ERRATAS!!</p></h4>
            </div>

            <div class="card-body">
                                            {{-- Ruta del recuerdo --}}
                <form method="post" action="{{ route('cliente.update',$consultaId->idCliente) }}">

            {{-- llave Autorizacion de token para el post --}}
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="form-label ">Nombre: </label>
                        <input type="text" class="form-control" value="{{ $consultaId->Nombre }}" name="TxtNombre">
                        @if($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('TxtNombre') }}</p>
                         @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email: </label>
                        <input type="text" class="form-control" value="{{ $consultaId->Email }}" name="TxtEmail">
                        <p class=" text-danger fst-italic">{{$errors->first('TxtEmail')}}</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No. Ine: </label>
                        <input type="text" class="form-control" value="{{ $consultaId->NoIne }}" name="TxtINE">
                        <p class=" text-danger fst-italic">{{$errors->first('TxtINE')}}</p>
                    </div>
            </div>

                 <div class="card-footer">
                    <button type="submit" class="btn btn-success">Actualizar cliente <i class="bi bi-check"></i></button>
                </form>
                <a href="{{ route('clientes.index')}}" class="btn btn-danger">Cancelar <i class="bi bi-x-lg"></i></a>

                </div>

          </div>
          {{-- Fin de tarjeta --}}
    </div>

    {{-- <a href="{{ route('Casa') }}"> <input type="button" value="Regresa"></a> --}}

    @stop
