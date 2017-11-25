@extends('baseLayout')
@section('content')
      <section>
        <div class="container">
          <div class="row">
              @foreach ($products as $product)
                  <div class="col-sm-6">
                    <img class="img-thumbnail" src="{{ asset('storage/' . $products->product) }}"  alt="products">
                  </div>
              @endforeach
          </div>
        </div>
      </section>
    @endsection
