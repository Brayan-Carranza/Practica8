@extends('welcome')
<!-- manda a llamar lo que contiene la plantilla-->
    @section('contenido')

    @if (session()->has('confirmacion'))

        {!! "<script> swal( 'Correcto',  'Tu libro se guardo!' ,  'success' ) </script> "  !!}


    @endif

{{-- Tarjeta en Bootstrap --}}
    <div class="container col-md-6">
        <h1 class="display-4 text-center mt-5 mb-5 ">Editar Libro</h1>

<!-- interacion con el foreach-->
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Formulario Incompleto revisalo bien</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        @endforeach
        @endif -->
        <div class="card text-center mb-5 ">

            <div class="card-header">
              fe de erratas!!!
            </div>

            <div class="card-body">
                                            {{-- Ruta del recuerdo --}}
                <form method="post" action="{{ route('libro.update',$consultaId->idLibros) }}">

            {{-- llave Autorizacion de token para el post --}}
                    @csrf
                    {!! method_field('PUT') !!}
                    <div class="mb-3">
                        <label class="form-label ">Titulo: </label>
                        <input type="text" class="form-control" value="{{ $consultaId->Titulo }}" name="TxtTitulo">
                        @if($errors->all())
                        <p class="text-danger fst-italic">{{ $errors->first('TxtTitulo') }}</p>
                         @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">ISBN: </label>
                        <input type="text" class="form-control" value="{{ $consultaId->ISBN }}" name="TxtISBN">
                        <p class=" text-danger fst-italic">{{$errors->first('TxtISBN')}}</p>
                    </div>

            </div>

                 <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Actualizar Libro</button>

                </form >
                </div>

          </div>
          {{-- Fin de tarjeta --}}
    </div>

    {{-- <a href="{{ route('Casa') }}"> <input type="button" value="Regresa"></a> --}}

    @stop
