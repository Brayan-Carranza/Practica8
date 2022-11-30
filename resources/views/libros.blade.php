@extends('welcome')

    @section('contenido')
    @include('M-Agregar')

    @if (session()->has('Eliminacion'))

    {!! "<script> swal( 'Correcto',  'Tu libro se ah eliminado!' ,  'success' ) </script> "  !!}


    @endif
    @if (session()->has('Actualizado'))

    {!! "<script> swal( 'Correcto',  'Tu libro ah sido actualizado!' ,  'success' ) </script> "  !!}
@endif
@if (session()->has('confirmacion'))

{!! "<script> swal( 'Correcto',  'Tu libro se guardo!' ,  'success' ) </script> "  !!}


@endif

        <div class="container col-md-6 mb-3 mt-4">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ModalAgregar">
            Agregar libro <i class="bi bi-plus-circle"></i>
          </button>
        </div>
        </div>

@foreach ( $resultRec as $consulta )

        <div class="container col-md-6">
     <div class="card-header">
     <p class="fw-bold">  Fecha: {{ $consulta->Fecha }}
      <p class="fw-bold"> ISBN:   {{ $consulta->ISBN }}</p>

 </div>
            <div class="card-body">

          <p>Titulo:  {{ $consulta->Titulo}}</p>
           Autor: {{ $consulta->Autor}}
            </div>

        <div class="card-footer">
            <a href="{{ route('libros.edit',$consulta->idLibros) }}" class="btn btn-success">Actualizar  <i class="bi bi-pencil-square"></i></a>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminar-{{ $consulta->idLibros }}">
                Eliminar  <i class="bi bi-trash"></i>
              </button>
              <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalDetalles-{{ $consulta->idLibros }}">
                Detalles  <i class="bi bi-info-circle"></i>
              </button>

        </div>
 @include('M-Detalles', ['id' => $consulta->idLibros])
 @include('M-Eliminar', ['id' => $consulta->idLibros])
     </div>


@endforeach
    @stop
