@component('mail::message')
# Welcome to ACCi

Welcome to the achievers confluence.

@component('mail::button', ['url' => ''])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
