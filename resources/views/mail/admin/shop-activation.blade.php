@component('mail::message')
# Solitud de  activación de la tienda
Por facor active la tienda. Aquí están los detalles de la tienda.
Nombre de la tienda:{{ $shop->name }}
Dueño de la tienda:{{ $shop->owner->name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
