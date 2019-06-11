@extends('admin.template')

@section('content')
    <div class="container text-center">
        <h1>
            <i class="fa fa-shopping-cart"></i>PRODUCTOS <small>Crear Productos</small>
        </h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-offset-3 col-md-6">
            <div class="page">
                @if(count($errors) > 0)
                    @include('admin.partials.errors')
                @endif

                {!! Form::open(['route'=>'product.store', 'files'=>true]) !!}
            
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
                    {!! Form::textarea(
                        'description',
                        null,
                        array(
                            'class'=>'form-control',
                            'rows'=> 5
                        )
                    )
                    !!}
                </div>
                <div class="form-group"><label for="extract">Extract:</label>
                    {!! Form::textarea(
                        'extract',
                        null,
                        array(
                            'class'=>'form-control',
                            'rows'=> 2
                        )
                    )
                    !!}
                </div>

                <div class="form-group"><label for="price">Price:</label>
                    {!! Form::number(
                        'price',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>

                <div class="form-group"><label for="image">Image:</label>
                    {!! Form::file(
                        'image',
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>
                <div class="form-group"><label for="visible">Visible:</label>
                    <p>
                    {!! Form::radio(
                        'visible',
                        'TRUE'
                    )
                    !!} True
                    </p>
                    <p>
                    {!! Form::radio(
                        'visible',
                        'FALSE'
                    )
                    !!} False
                    </p>
                </div>
                <div class="form-group"><label for="category_id">Category:</label>
                    {!! Form::select(
                        'category_id',
                        $categories,
                        null,
                        array(
                            'class'=>'form-control'
                        )
                    )
                    !!}
                </div>

                <div class="form-group"><label for="tags">Etiquetas:</label>
                <div>
                @foreach($tags as $tag)
                <label>
                    {!! Form::checkbox(
                        'tags[]',
                        $tag->id
                    )
                    !!} {{ $tag->name }}
                    </label>
                    @endforeach
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