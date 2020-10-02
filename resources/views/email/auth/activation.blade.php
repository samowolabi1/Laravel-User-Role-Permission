 @component('mail::message')
# Activate your Account

Thanks for Signing up, Plaese activate your account.

@component('mail::button', ['url' => route('auth.activate',[
	'token'=> $user->activation_token,
	'email'=> $user->email
])])
Activate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
