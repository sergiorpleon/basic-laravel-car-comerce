@extends('store.template')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1><i class="fa fa-shopping-cart"></i>Detalle del pedido</h1>
    </div>
    <div class="page order-detail">
        <div class="table-responsive">
            <h3>Datos de usuario</h3>
            <table class="table table-striped table-hover table-borderd">
                <tr>
                    <td>Nombre:</td>
                    <td>{{ Auth::user()->name . " " .Auth::user()->last_name }}:</td>
                </tr>
                <tr>
                    <td>Usuario:</td>
                    <td>{{ Auth::user()->user }}</td>
                </tr>
                <tr>
                    <td>Correo:</td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td>Direccion:</td>
                    <td>{{ Auth::user()->address }}</td>
                </tr>
            </table>
        </div>
        <div class="table-responsive">
            <h3>Datos del pedido</h3>
            <table class="table table-striped table-hover table-borderd">
                <tr>
                    <td>Producto:</td>
                    <td>Precio:</td>
                    <td>Cantidad:</td>
                    <td>Subtotal:</td>
                </tr>
                @foreach($cart as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ number_format($item->price, 2)  }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ number_format($item->price*$item->quantity, 2) }}</td>
                </tr>
                @endforeach
            </table>
            <h3><span class="label label-success">
            Total: ${{ number_format($total, 2) }}
            </span></h3>
            <p>
            <a href="{{ route('cart-show') }}" class="btn btn-primary">Regresar</a>
            <a href="{{ route('buy') }}" class="btn btn-warning">Pagar con paupal</a>
            </p>
        </div>
    </div>
</div>

@endsection