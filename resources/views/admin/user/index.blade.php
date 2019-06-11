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
        <i class="fa fa-users"></i> USUARIOS
        <a href="{{ route('user.create') }}" class="btn btn-warning"><i class="fa fa-plus-circle"></i>
        usuarios
        </a>
        </h1>
    </div>
    <div class="table-responsive container">
    <table class="table table-striped table-hover table-borderd">
        <thead>
            <tr>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Nombre de Usuario</th>
                <th>Correo</th>
                <th>Apellidos</th>
                <th>Role</th>
                <th>Nombre</th>
                <th>Activo</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td><a href="{{ route('user.edit', $user) }}" class="btn btn-primary"><i class="fa fa-pencil-square"></i>
                </a> 
                </td>
                <td>
                    
                {!! Form::open(['route'=>['user.destroy', $user]]) !!}
                <input type='hidden' name='_method' value="DELETE">
                <button onCLick="return confirm('Eliminar registro?')" class="btn btn-danger">
                    <i class="fa fa-minus-square"></i></button>
                {!! Form::close() !!}
            </td></td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->type }}</td>
                <td>{{ $user->user }}</td>
                <td>{{ $user->active }}</td>
                <td>{{ $user->address }}</td>
            </tr>
            
        @endforeach
        </tbody>
        </table>
    </div>
    <div class="container">
        <div class="row  justify-content-center" >
            {{ $users->render()}}
        </div>
    </div>
   

@endsection