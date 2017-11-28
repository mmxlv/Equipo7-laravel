@extends('baseLayout')
@section('content')
  <div class="producto-editando" style="text-align:center">
    <div class="producto-a-editar">
      <h1>Editando: {{$product->name}}</h1>
      <br>
    </div>
    <form class="formulario-edicion" action="/product/{{$product->id}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{method_field('patch')}}
      <div class="">
        <label for="">
          <p>Nombre del producto:</p>
          <input type="text" name="name" value="" placeholder="{{$product->name}}">
        </label>
      </div>
      <div class="">
        <label for="">
          <p>Descripcion del producto:</p>
          <input type="text" name="description" value="" placeholder="{{$product->description}}">
        </label>
      </div>
      <div class="">
        <label for="">
          <p>Imagen del producto:</p>
          <input type="file" name="imgpath" value="">
        </label>
      </div>
      <div class="botones">
        <input class="actualizar" type="submit" name="" value="Actualizar">
        <input class="cancelar-modificacion" type="reset" name="" value="Cancelar">
      </div>
    </form>
  </div>
@endsection
