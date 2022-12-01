<img src="{{ asset('img/logo.png') }}" alt="logo">
<div class="flex flex-row w-1/4 justify-between">
    <a href="{{ route('myApplications') }}">{{ __('Мои заявки') }}</a>
    <p>|</p>
    <a href="{{ route('allAplications') }}">{{ __('Все заявки') }}</a>
    <p>|</p>
    <a href="{{ route('profile') }}">{{ __('Профиль') }}</a>
</div>

