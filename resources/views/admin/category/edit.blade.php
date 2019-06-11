@extends('admin.template')

@section('content')
    <div class="container text-center">
        <h1>
            <i class="fa fa-shopping-cart"></i>CATEGORIAS <small>Editar Categorias</small>
        </h1>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if(count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!! Form::model($category,array('route'=>array('category.update', $category))) !!}
            
                <input type="hidden" name="_method" value="PUT" />
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
                <div class="form-group"><label for="color">Color:</label>
                    <input type="color" name="color"  class="form-control"
                    value={{ isset($category->color) ? $category->color : '' }}>
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