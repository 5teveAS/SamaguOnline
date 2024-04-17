@component('mail::layout')
{{-- Header --}}
@slot('header')
@component('mail::header', ['url' => config('app.url')])
{{--{{ config('app.name') }}--}}
<img src="https://i.ibb.co/pKGHTDq/samagu-logo-img.jpg" alt="samagu-logo-img" border="0">

@endcomponent
@endslot

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
@slot('subcopy')
@component('mail::subcopy')
{{ $subcopy }}
@endcomponent
@endslot
@endisset

{{-- Footer --}}
@slot('footer')
@component('mail::footer')
© {{ date('Y') }} {{ config('app.name') }}. @lang('Todos los derechos reservados.')
@endcomponent
@endslot
@endcomponent
