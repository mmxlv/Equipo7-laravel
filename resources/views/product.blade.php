@extends('baseLayout')
@section('content')
  <div class="">
    <h1>{{$product->name}}</h1>
    <p>{{$product->description}}</p>
    <img src="{{ asset('storage/' . $product->imgpath) }}" alt="">
  </div>
  <div class="">
    <form class="" action="/product/{{$product->id}}" method="post">
      {{ csrf_field() }}
      {{ method_field('delete') }}
      <input type="submit" name="" value="Borrar">
    </form>
    <a href="/product/{{$product->id}}/edit">Editar</a>
  </div>
@endsection
