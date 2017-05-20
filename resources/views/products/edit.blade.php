@component('layouts.app')

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Editar producto</div>
            <div class="panel-body">

                {!! Form::open(['route' => ['products.update', $product ], 'method' => 'PUT']) !!}

                    {{ Form::label('name') }}
                    {{ Form::text('name', $product->name ,[
                        'class' => "form-control"
                    ]) }}

                    {{ Form::label('category') }}
                    {{ Form::select('category_id', $categories,  null,[
                        'class' => "form-control"
                    ]) }}

                    <div class="form-group">
                        <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar producto
                            </button>
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endcomponent