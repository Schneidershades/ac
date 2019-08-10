@component('mail::message')
# Event Registration from User

A user has registered as regards to the upcoming event.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
