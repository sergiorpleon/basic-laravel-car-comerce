@extends('store.template')

@section('content')
    @include('store.partials.slider')
    <div class="container marketing">
    <div id="products" class="row">
    @foreach($products as $product)
        <div class="col-md-4">
        <div class="product text-center">
        <h3>{{ $product->name }}</h3>
        <img src="{{ asset($product->image) }}" alt="not imagen" style="max-width: 100%;">
        <div class="product-info">
            <p>{{ $product->extract }}</p>
            <p class="price">Precio: ${{ number_format($product->price,2) }}</p>
            <p>
                <a class="btn btn-primary" href="{{ route('cart-add', $product->slug) }}">La quiero</a>
                <a class="btn btn-success" href="{{ route('product-detail', $product->slug) }}">Leer más</a>
            </p>
        </div>
        </div>
        </div>
        
    @endforeach
    
    </div>
    <div class="container">
        <div class="row  justify-content-center" >
            {{ $products->render()}}
        </div>
    </div>

    </div>
@endsection

<script>

</script>