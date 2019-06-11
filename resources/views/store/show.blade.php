@extends('store.template')

@section('content')
<div class="container">
<h1 class="text-center">Detalle del Producto</h1>
<div class="row">
    <div class="product-block col-sm-6">
    <img src="{{ asset($product->image) }}" alt="not imagen" style="max-width: 100%;">
        
    </div>
    <div class="product-block col-sm-6">    
        <div class="product">
        <h3>{{ $product->name }}</h3>
        <hr/>
        <div class="product-info">
            <p>{{ $product->description }}</p>
            <p>Precio: ${{ number_format($product->price,2) }}</p>
            <p>
                <a class="btn btn-info" href="{{ route('cart-add', $product->slug) }}">La quiero</a>
            </p>
        </div>
        </div>
        
    </div>
    </div>
    <p>
        <a class="btn btn-primary" href="{{ route('home') }}">Regresar</a>
    </p>
    </div>
@endsection