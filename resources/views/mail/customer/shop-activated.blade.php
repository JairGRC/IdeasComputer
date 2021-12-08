@component('mail::message')
# Felicitaciones

Tiene el permiso para tienda.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
