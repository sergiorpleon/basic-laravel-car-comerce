@extends('admin.template')

@section('content')

    @if( session('message'))
        <div class="container text-center">
            <div class="alert alert-info">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <div class="container text-center">
        <h1>
        <i class="fa fa-shopping-cart"></i> ORDENES
        
        </h1>
    </div>
    <div class="table-responsive container">
    <table class="table table-striped table-hover table-borderd">
        <thead>
            <tr>
                <th>Ver</th>
                <th>Usuario</th>
                <th>Subtotal</th>
                <th>Shipping</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                
            <td>Ver</td>
            <td>{{ $order->user->email }}</td>
            <td>{{ $order->subtotal }}</td>
            <td>{{ $order->shipping }}</td>
                
            </tr>
            
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row  justify-content-center" >
            {{ $orders->render()}}
        </div>
    </div>

@endsection