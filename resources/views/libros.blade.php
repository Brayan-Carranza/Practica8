@extends('welcome')

    @section('contenido')

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
         <button type="submit" class="btn btn-primary">A</button>
         <button type="submit" class="btn btn-primary">E</button>

        </div>

     </div>


@endforeach
    @stop
