@extends('welcome')
@section('contenido')
@if (session()->has('Eliminacion'))

{!! "<script> swal( 'Correcto',  'El cliente se ah eliminado!' ,  'success' ) </script> "  !!}


@endif
@if (session()->has('Actualizado'))

{!! "<script> swal( 'Correcto',  'Cliente actualizado!' ,  'success' ) </script> "  !!}
@endif
@if (session()->has('confirmacion'))

{!! "<script> swal( 'Correcto',  'Cliente guardado!' ,  'success' ) </script> "  !!}


@endif
{{-- <div class="container col-md-1">
<div><a href="{{ route('clientes.index')}}" class="btn btn-danger"> <i class="bi bi-caret-left-square"></i>
</div>
</div> --}}


<div class="container mt-4 table-responsive table-align-middle ">

<table class="table table table table-mb-0 ">
    <thead>
        <tr class="align-bottom">

        <th class='table-secondary' scope="col">IdCliente</th>
        <th class='table-secondary' scope="col">Fecha</th>
        <th class='table-secondary' scope="col">Nombre</th>
        <th class='table-secondary' scope="col">Email</th>
        <th class='table-secondary' scope="col">No.INE</th>
        <th class='table-secondary' scope="col">Actualizar</th>
        <th class='table-secondary' scope="col">Eliminar</th>

      </tr>

    </thead>
    @foreach ( $resultCli as $consulta )
    <tbody>

      <tr>
        <th scope="row">{{ $consulta->idCliente }}</th>
        <td class="align-top">{{ $consulta->Fecha }}</td>
        <td class="align-top">{{ $consulta->Nombre }}</td>
        <td class="align-top">{{ $consulta->Email }}</td>
        <td class="align-top">{{ $consulta->NoIne }}</td>
        <td class="align-top"><a href="{{ route('clientes.edit',$consulta->idCliente) }}" class="btn btn-success">Actualizar  <i class="bi bi-pencil-square"></i></a></td>
        <td class="align-top"><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarC-{{ $consulta->idCliente }}">
            Eliminar  <i class="bi bi-trash"></i>
          </button></td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>

    <div class="card-footer">

     {{-- <a href="{{ route('clientes.edit',$consulta->idCliente) }}" class="btn btn-success">Actualizar  <i class="bi bi-pencil-square"></i></a> --}}
     {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#ModalEliminarC-{{ $consulta->idCliente }}">
        Eliminar  <i class="bi bi-trash"></i>
      </button> --}}

    </div>
    @include('M-EliminarC', ['id' => $consulta->idCliente])
 </div>



@stop
