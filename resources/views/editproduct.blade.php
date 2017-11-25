@extends('baseLayout')
@section('content')
  <div class="" style="text-align:center">
    <div class="">
      <h1>Editando: {{$product->name}}</h1>
      <br>
    </div>
    <form class="" action="/product/{{$product->id}}" method="post" enctype="multipart/form-data">
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
      <div class="">
        <input type="submit" name="" value="Actualizar">
        <input type="reset" name="" value="Cancelar">
      </div>
    </form>
  </div>
@endsection
