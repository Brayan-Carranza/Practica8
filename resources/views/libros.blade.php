@extends('welcome')

    @section('contenido')
    @if (session()->has('Actualizado'))

    {!! "<script> swal( 'Correcto',  'Tu libro ah sido actualizado!' ,  'success' ) </script> "  !!}
@endif
@foreach ( $resultRec as $consulta )



    <div class="container col-md-6">

     <div class="card-header">
        {{ $consulta->Fecha }}
        {{ $consulta->ISBN }}

 </div>
            <div class="card-body">

            {{ $consulta->Titulo}}
            </div>

        <div class="card-footer">
            <a href="{{ route('libros.edit',$consulta->idLibros) }}" class="btn btn-success">Actualizar</a>
         <button type="submit" class="btn btn-danger">Eliminar</button>

        </div>

     </div>


@endforeach
    @stop
