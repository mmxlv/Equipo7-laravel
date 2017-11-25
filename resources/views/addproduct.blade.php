@extends('baseLayout')
@section('content')
<div class="" style='text-align:center'>
  <form class="" action="{{ route('addproducts') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="">
      <label for="">
        <p>Nombre del Producto:</p>
        <input type="text" name="name" value="">
      </label>
    </div>
    <div class="">
      <label for="">
        <p>Descripcion del Producto:</p>
        <input type="text" name="description" value="">
      </label>
    </div>
    <div class="">
      <label for="">
        <p>Imagen del Producto:</p>
        <input type="file" name="imgpath" value="">
      </label>
    </div>
    <div class="">
      <input type="submit" name="" value="Enviar">
      <input type="reset" name="" value="Cancelar">
    </div>
  </form>
</div>
@endsection
