@component('layouts.app')

    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Editar producto</div>
            <div class="panel-body">
                {!! Form::model($product, [
                    'route' => ['products.update', $product], 'method' => 'PUT',
                    'role' => 'form',
                    'class' => 'form'
                ]) !!}

                    {!! Form::text('name', null ,[
                        'class' => "form-control"
                    ]) !!}

                    {!! Form::select('category_id', $categories,  [
                        'class' => "form-control"
                    ]) !!}

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