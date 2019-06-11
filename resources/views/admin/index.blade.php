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
        <i class="fa fa-dashboard"></i>PANEL DE ADMINISTRACIÓN
        
        </h1>
    </div>
    <div class="table-responsive container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="margin: 10px;">
                    <h3 class="text-center">Productos</h3>
                    <a class="btn btn-info" href="{{ route('product.index') }}">Ver</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="margin: 10px;">
                    <h3 class="text-center">User</h3>
                    <a class="btn btn-info" href="{{ route('user.index') }}">Ver</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="margin: 10px;">
                    <h3 class="text-center">Order</h3>
                    <a class="btn btn-info" href="{{ route('order.index') }}">Ver</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="margin: 10px;">
                    <h3 class="text-center">Category</h3>
                    <a class="btn btn-info" href="{{ route('category.index') }}">Ver</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card" style="margin: 10px;">
                    <h3 class="text-center">Etiqueta</h3>
                    <a class="btn btn-info" href="{{ route('tag.index') }}">Ver</a>
                </div>
            </div>
        </div>
    </div>


@endsection