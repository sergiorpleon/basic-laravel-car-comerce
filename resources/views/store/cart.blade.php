@extends('store.template')

@section('content')
<div class="container text-center">
    <h1><i class="fa fa-shopping-cart"></i>Carrito de Compra</h1>
</div>
<div class="table-cart text-center ">
@if(count($cart))
<p>
    <a href="{{ route('cart-trash') }}" class="btn btn-danger">Vaciar Carrito</a>
</p>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Subtotal</th>
            <th>Quitar</th>
        </tr>
        <tbody>
        @foreach($cart as $item)
        <tr>
            <td><img src="{{ asset('/img/image.png') }}" alt=""></td>
            <td>{{ $item->name }}</td>
            <td>{{ number_format($item->price, 2) }}</td>
            <td>
                <input type="number"
                    min="1"
                    max="100"
                    value="{{ $item->quantity }}"
                    id="product_{{ $item->id }}">
                <a href="#" 
                    class="btn btn-warning btn-update-item"
                    data-id="{{ $item->id }}"
                    data-slug="{{  $item->slug }}"
                    data-href="{{ route('home') }}">
                <i class="fa fa-refresh"></i>
                </a>    
            </td>
            <td>{{ number_format($item->price*$item->quantity, 2) }}</td>
            <td><a href="{{ route('cart-delete', $item) }}" class="btn btn-danger">X<i class="fa fa-remove"></i></a></td>
        </tr>
        @endforeach
        </tbody>
    </thead>
    </table>
    <h3><span class="label label-success">Total: {{ number_format($total, 2) }}</span></h3>
</div>
@else
<h3><span class="label label-warning">No hay productos en el carrito :(</span></h3>
@endif
<hr>
<p>

<a href="{{ route('home') }}" class="btn btn-primary">
<i class="fa fa-chevron-circle-left"></i> Seguir comprando</a>

<a href="{{ route('order-detail') }}" class="btn btn-primary">
<i class="fa fa-chevron-circle-left"></i> Comprar
</a>
</p>
</div>
@endsection