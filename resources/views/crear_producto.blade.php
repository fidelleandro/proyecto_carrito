@extends('layouts.producto')
@section('content')
    <form method="POST" action="{{route('saveProduct')}}" accept-charset="UTF-8" enctype="multipart/form-data">
       {{ csrf_field() }}
      <div>
        <label class="form-label" for="nombre">Nombre de producto</label>
        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre de producto">
      </div>
      <div>
        <label class="form-label" for="foto">Foto de producto</label>
        <input type="file" name="foto" id="foto" class="form-control">
      </div>
      <br>
      <input type="submit" class="btn btn-success" value="Guardar">
    </form>
@endsection