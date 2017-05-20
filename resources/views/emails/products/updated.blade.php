@component('mail::message')
# {{ $product->name }}

El producto **{{ $product->name }}** fue actualizado!

@component('mail::button', ['url' => url('products/'.$product->id)])
    Ver producto
@endcomponent

@component('mail::panel')
    Informacion del producto
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
