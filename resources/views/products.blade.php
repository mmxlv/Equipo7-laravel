@extends('baseLayout')
@section('content')
      <section>
        <article class="products">
          <ul>
            @foreach ($products as $product)
              <li>{{$product->name}}</li>
                <img src="{{ asset('storage/' . $product->imgpath) }}" alt="">
              <a href="/product/{{$product->id}}">+Info</a>
            @endforeach
          </ul>
        </article>
        @if (count($products))
          <div class="col-xs-12 row justify-content-start" style="text-align:center">
            {{$products->links()}}
          </div>
        @endif
      </section>
    @endsection
