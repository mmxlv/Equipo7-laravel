@extends('baseLayout')
@section('content')
<div class="" style='text-align:center'>
  <form class="add-product" action="{{ route('addproducts') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="nombre-producto-nuevo">
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
    <div class="botones">
      <input class="enviar" type="submit" name="enviar" value="Enviar">
      <input class="cancelar" type="reset" name="cancelar" value="Cancelar">
    </div>
  </form>
</div>
@endsection
