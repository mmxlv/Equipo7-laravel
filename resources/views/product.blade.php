@extends('baseLayout')
@section('content')
<div class="contenido-general">
    <div class="datos-producto">
        <h1>{{$product->name}}</h1>
        <p>{{$product->description}}</p>
    </div>
    <div class="imagen-producto">
        <img src="{{ asset('storage/' . $product->imgpath) }}" alt="">
    </div>
  <div class="acciones">
    <form class="" action="/product/{{$product->id}}" method="post">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <input class="borrar" type="submit" name="" value="Borrar">
    </form>
    <a class="editar" href="/product/{{$product->id}}/edit">Editar</a>
  </div>
</div>
@endsection
