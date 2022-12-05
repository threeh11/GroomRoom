@extends('layouts.base')

@section('title', __('Профиль'))
    
@section('main')
    <div class="p-6 bg-white rounded-2xl my-10">
        <form action="{{ route('allAplications') }}" method="get" class="flex flex-row items-start justify-between">
            <div class="flex flex-row w-[55%] justify-between">
                <input type="text" name="search" placeholder="Поиск" class="input input-bordered w-full max-w-xs" />
                <select class="select select-bordered w-full max-w-xs" name="category">
                @if($categories != NULL)
                    <option selected>{{ __('Все категории') }}</option>
                    @for($i = 0; $i < $categories->count(); $i++)
                        <option value="{{ $categories[$i]->id }}">
                            {{ __($categories[$i]->name) }}
                        </option>
                    @endfor
                @else
                    <option disabled selected>{{ __('Нет ниодной категории') }}</option>
                @endif
                </select>
            </div>
            <input class="btn bg-[#303640]" type="submit" value="{{ __('Применить') }}">
        </form>
    </div>
    <div class="p-6 bg-white rounded-2xl my-10">
        <h3 class="text-2xl mb-10">
            {{ __('Заявки наших клиентов') }}
        </h3>
        <div class="grid grid-cols-3 gap-6">
            @foreach($aplications as $aplication)
                <div class="p-4 bg-[#f0f0f0] rounded-2xl">
                    <p class="font-medium leading-tight text-3xl">
                        {{ $aplication->pet->alias }}
                    </p>
                    <div class="flex flex-row">
                        <p>
                            {{ __('Категория - ') }}
                        </p>
                        <p class="pl-1">
                            {{ $aplication->type }}
                        </p>
                    </div>
                    <p>
                        {{ $aplication->date . ' ' . $aplication->time }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
@endsection