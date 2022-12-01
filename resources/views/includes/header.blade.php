<a href="{{ route('index') }}">
    <img src="{{ asset('img/logo.png') }}" alt="logo">
</a>
@unless (Route::is('profile') || Route::is('myApplications') || Route::is('myPet'))
    <div class="flex flex-row w-1/4 justify-between">
        <a href="{{ route('myApplications') }}">{{ __('Мои заявки') }}</a>
        <p>|</p>
        <a href="{{ route('allAplications') }}">{{ __('Все заявки') }}</a>
        <p>|</p>
        <a href="{{ route('profile') }}">{{ __('Профиль') }}</a>
    </div>
@else
    <div class="flex flex-row w-1/4 justify-between">
        <a href="{{ route('profile') }}">{{ __('Профиль') }}</a>
        <p>|</p>
        <a href="{{ route('myPet') }}">{{ __('Питомцы') }}</a>
        <p>|</p>
        <a href="{{ route('myApplications') }}">{{ __('Заявки') }}</a>
    </div>
@endunless 

