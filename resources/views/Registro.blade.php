@extends('welcome')

@section('contenido')

    @if (session()->has('confirmacion'))

{!! '<script> swal( "Todo correcto", "Libro ' . session()->get("confirmacion") . ' ah sido registrado con éxito",  "success" ) </script> '  !!}


@endif
    <div class="container col-md-6 mt-4 cardme">    
    <div class="card text-center font-monospace cardme" >
  <div class="card-header">
    <h3>Registro</h3>
  </div>
  <form method="post" action="guardarRegistro">
                             @csrf 
  <div class="card-body">

<label class="form-label font-monospace" >ISBN</label>
<input type="text" class="form-control" name="TxtISBN">

@if($errors->all())
<div class="alert alert-danger"><p class="text-danger fst-italic">{{ $errors->first('TxtISBN') }}</p> </div>
 @endif

 
<label class="form-label font-monospace" >Titulo</label>
<input type="text" class="form-control" name="TxtTitulo">
@if($errors->all())
<div class="alert alert-danger"><p class="text-danger fst-italic">{{ $errors->first('TxtTitulo') }}</p> </div>
 @endif
  
<label class="form-label font-monospace" >Autor</label>
<input type="text" class="form-control" name="TxtAutor">
@if($errors->all())
<div class="alert alert-danger"><p class="text-danger fst-italic">{{ $errors->first('TxtAutor') }}</p> </div>
 @endif

<label class="form-label font-monospace" >Paginas</label>
<input type="text" class="form-control" name="TxtPaginas">
@if($errors->all())
<div class="alert alert-danger"><p class="text-danger fst-italic">{{ $errors->first('TxtPaginas') }}</p> </div>
 @endif

<label class="form-label font-monospace" >Editorial</label>
<input type="text" class="form-control" name="TxtEditorial">
@if($errors->all())
<div class="alert alert-danger"><p class="text-danger fst-italic">{{ $errors->first('TxtEditorial') }}</p> </div>
 @endif
  
<label class="form-label font-monospace" >E-mail Editorial</label>
<input type="text" class="form-control" name="TxtE-mail">
@if($errors->all())
<div class="alert alert-danger"><p class="text-danger fst-italic">{{ $errors->first('TxtE-mail') }}</p> </div>
 @endif
  <div class="card-footer text-muted">
    
  <button type="submit" class="btn btn-danger">Guardar Registro</button>

  </div>
  </form>
  </div>
</div>
@stop 
