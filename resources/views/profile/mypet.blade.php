@extends('layouts.base')

@section('title', __('Мои питомцы'))
    
@section('main')
    @if($pets == NULL)
        <a href="">
            Добавить питомца
        </a>
        <div class="block">
            <form action="{{ route('addPet') }}" method="post" class="flex flex-col w-1/3 m-auto">
                @csrf
                <input type="text" name="alias" placeholder="Введите кличку животного">
                <input type="text" name="type" placeholder="Введите вид животного">
                <p>{{ __('Выберите пол') }}</p>
                <div class="flex flex-row">
                    <label class="pr-3" for="maleM" id="maleM_label">{{ __('Мужской') }}</label>
                    <input type="radio" name="maleM" id="maleM">
                    <label class="px-3" for="maleW" id="maleW_label">{{ __('Женский') }}</label>
                    <input type="radio" name="maleW" id="maleW">
                </div>
                <input type="date" name="date" placeholder="Введите дату рождения животного">
                <input type="text" name="race" placeholder="Введите породу животного">
                <input type="submit" value="Добавить">
            </form>
        </div>
    @else

    @endif
@endsection
