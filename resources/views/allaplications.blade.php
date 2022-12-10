@extends('layouts.base')

@section('title', __('Все заявки'))
    
@section('main')
    @if ($aplications != NULL)
        <div class="p-6 bg-white rounded-2xl my-10">
            <form action="{{ route('allAplications') }}" method="get" class="flex flex-row items-start justify-between">
                <div class="flex flex-row w-[55%] justify-between">
                    <select class="select select-bordered w-full max-w-xs" name="category">
                    @if($categories != NULL)
                        <option @selected($selectedAll)>{{ __('Все категории') }}</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" @selected($selectedCategory === $category->id)>
                                {{ __($category->name) }}
                            </option>
                        @endforeach
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
                    <a href="{{ route('aplicationPage', $aplication->id) }}" class="p-4 bg-[#f0f0f0] rounded-2xl">
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
                    </a>
                @endforeach
            </div>
        </div>
    @else
        <div class="p-6 bg-white rounded-2xl my-10">
            <h3 class="text-3xl flex justify-center items-center">
                {{ __('Нет заявок') }}
            </h3>
        </div>
    @endif
    
@endsection