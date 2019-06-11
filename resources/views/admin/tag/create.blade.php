@extends('admin.template')

@section('content')
    <div class="container text-center">
        <h1>
            <i class="fa fa-shopping-cart"></i>TAGS <small>Crear Tags</small>
        </h1>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if(count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!! Form::open(['route'=>'tag.store']) !!}
            
                <div class="form-group"><label for="name">Nombre:</label>
                    {!! Form::text(
                        'name',
                        null,
                        array(
                            'class'=>'form-control',
                            'placeholder'=>'Ingrese el nombre...',
                            'autofocus'=>'autofocus'
                        )
                    )
                    !!}

                </div>
            
                <div class="form-group"><label for="description">Description:</label>
                    {!! Form::text(
                        'description',
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