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
        <i class="fa fa-cog"></i> CATEGORIAS
        <a href="{{ route('category.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>
        Categorias
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
                <th>Color</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td><a href="{{ route('category.edit', $category) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i>
                </a> 
                </td>
                <td>
                    
                {!! Form::open(['route'=>['category.destroy', $category]]) !!}
                <input type='hidden' name='_method' value="DELETE">
                <button onCLick="return confirm('Eliminar registro?')" class="btn btn-danger">
                    <i class="fa fa-minus-square"></i></button>
                {!! Form::close() !!}
            </td></td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->color }}</td>
            </tr>
            
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row  justify-content-center" >
            {{ $categories->render()}}
        </div>
    </div>

@endsection