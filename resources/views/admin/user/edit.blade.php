@extends('admin.template')

@section('content')
    <div class="container text-center">
        <h1>
            <i class="fa fa-shopping-cart"></i>USUARIOS <small>Editar usuarios</small>
        </h1>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if(count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!! Form::model($user,array('route'=>array('user.update', $user))) !!}
            
                <input type="hidden" name="_method" value="PUT" />
                <div class="form-group"><label for="name">Nombre de usuario:</label>
                    {!! Form::text(
                        'name',
                        null,
                        array(
                            'class'=>'form-control',
                            'placeholder'=>'Ingrese el nombre de usuario...',
                            'autofocus'=>'autofocus'
                        )
                    )
                    !!}

                </div>
            
                <div class="form-group"><label for="email">Email:</label>
                    {!! Form::text(
                        'email',
                        null,
                        array(
                            'class'=>'form-control',
                            'placeholder'=>'Ingrese el correo...'                        
                        )
                    )
                    !!}
                </div>
                

                <div class="form-group"><label for="last_name">Apellidos:</label>
                    {!! Form::text(
                        'last_name',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>
                <div class="form-group"><label for="type">Role:</label>
                    {!! Form::text(
                        'type',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>
                
                <div class="form-group"><label for="user">Nombre:</label>
                    {!! Form::text(
                        'user',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>
                
                <div class="form-group"><label for="active">Activo:</label>
                    {!! Form::text(
                        'active',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>
                
                <div class="form-group"><label for="address">Dirección:</label>
                    {!! Form::text(
                        'address',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>

                <div class="form-group">
                    {!! Form::submit(
                        'Guardar',
                        array(
                            'class'=>'btn btn-primary'
                        )
                    )
                    !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection