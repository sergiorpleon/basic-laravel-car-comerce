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
        <i class="fa fa-puzzle-piece"></i> PRODUCTOS
        <a href="{{ route('product.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>
        Productos
        </a>
        </h1>
    </div>
    <div class="table-responsive container">
    <table class="table table-striped table-hover table-borderd">
        <thead>
            <tr>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Extract</th>
                <th>Price</th>
                <th>Image</th>
                <th>Visible</th>
                <th>Category</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><a href="{{ route('product.edit', $product) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i>
                </a> 
                </td>
                <td>
                    
                {!! Form::open(['route'=>['product.destroy', $product]]) !!}
                <input type='hidden' name='_method' value="DELETE">
                <button onCLick="return confirm('Eliminar registro?')" class="btn btn-danger">
                    <i class="fa fa-minus-square"></i></button>
                {!! Form::close() !!}
            </td></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->extract }}</td>
                <td>{{ $product->price }}</td>
                <td><img src="{{ asset($product->image) }}" alt="not imagen" style="max-height: 150px;">
                </td>
                <td>{{ $product->visible }}</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row  justify-content-center" >
            {{ $products->render()}}
        </div>
    </div>

@endsection