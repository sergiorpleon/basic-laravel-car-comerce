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
        <i class="fa fa-tags"></i> Etiquetas
        <a href="{{ route('tag.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>
        Etiqueta
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
            </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td><a href="{{ route('tag.edit', $tag) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i>
                </a> 
                </td>
                <td>
                {!! Form::open(['route'=>['tag.destroy', $tag]]) !!}
                <input type='hidden' name='_method' value="DELETE">
                <button onCLick="return confirm('Eliminar registro?')" class="btn btn-danger">
                    <i class="fa fa-minus-square"></i></button>
                {!! Form::close() !!}
            </td></td>
                <td>{{ $tag->name }}</td>
                <td>{{ $tag->description }}</td>
            </tr>
            
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row  justify-content-center" >
            {{ $tags->render()}}
        </div>
    </div>

@endsection