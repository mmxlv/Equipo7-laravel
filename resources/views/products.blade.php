@extends('baseLayout')
@section('content')
      <section>
        <article class="products">
          <ul>
            @foreach ($products as $product)
            <div class="paquete-imagen">
              <li>{{$product->name}}</li>
                <a href="/product/{{$product->id}}">info</a>
                <div class="imagen">
                    <img src="{{ asset('storage/' . $product->imgpath) }}" alt="">
                </div>
            </div>
            @endforeach

          </ul>
        </article>
        @if (count($products))
          <div id="paginacion" class="col-xs-12 row justify-content-start" style="text-align:center">
            {{$products->links()}}
          </div>
        @endif
      </section>
    @endsection
