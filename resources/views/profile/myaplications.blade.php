@extends('layouts.base')

@section('title', __('Заявки'))

@section('main')
    @if($aplications == NULL)
        <x-addButton>
            @if($errors->any() == false)
                {{ __('Добавить заявку') }}
            @else
                {{ __('Закрыть') }}
            @endif
        </x-addButton>
        <x-formAddAplication :pets="$pets" :categories="$categories" :dateEnd="$dateEnd"/>
        <a href="{{ route('myAplications', ['count' => 10, 'page' => $page, 'active' => 1]) }}" class="btn">{{ __('Активные') }}</a>
        <a href="{{ route('myAplications', ['count' => 10, 'page' => $page, 'active' => 0]) }}" class="btn">{{ __('Не активные') }}</a>
    @else
        <x-addButton>
            @if($errors->any() == false)
                {{ __('Добавить заявку') }}
            @else
                {{ __('Закрыть') }}
            @endif
        </x-addButton>
        <x-formAddAplication :pets="$pets" :categories="$categories" :dateEnd="$dateEnd"/>
        <a href="{{ route('myAplications', ['count' => 10, 'page' => $page, 'active' => 1]) }}" class="btn">{{ __('Активные') }}</a>
        <a href="{{ route('myAplications', ['count' => 10, 'page' => $page, 'active' => 0]) }}" class="btn">{{ __('Не активные') }}</a>
        @if($aplications[0] != NULL)
            <div class="mt-10">
                <table class="table w-full">
                    <thead>
                        <tr>
                        <th>{{ __('ID') }}</th>
                        <th>{{ __('Питомец') }}</th>
                        <th>{{ __('Тип услуги') }}</th>
                        <th>{{ __('Место приема') }}</th>
                        <th>{{ __('Дата приема') }}</th>
                        <th>{{ __('Время приема') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aplications as $aplication)
                            <tr>
                            <th>{{ $aplication->id }}</th>
                            <th>{{ $aplication->pet->type . ' ' . $aplication->pet->alias }}</th>
                            <th>{{ $aplication->type }}</th>
                            <th>{{ $aplication->place }}</th>
                            <th>{{ $aplication->date }}</th>
                            <th>{{ $aplication->time }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @else
                <div class="p-6 bg-white rounded-2xl my-10">
                    <h3 class="text-3xl flex justify-center items-center">
                        {{ __('Нет заявок') }}
                    </h3>
                </div>
            @endif
    @endif  
    <div class="flex my-10">
    @if($countElPage < $countAplications && $countElPage != NULL && $aplications[0] != NULL)
            <div class="flex flex-row justify-between w-full">
                {{ $aplications->appends(['count' => $countElPage, 'active' => 1])->links('vendor.pagination.tailwind') }}
                <div class="btn-group ml-10">
                    <a class="btn" href="{{ route('myAplications', ['count' => 10, 'page' => $page, 'active' => 1]) }}">
                        10
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['count' => 20, 'page' => $page, 'active' => 1]) }}">
                        20
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['count' => 50, 'page' => $page, 'active' => 1]) }}">
                        50
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['count' => 100,'page' => $page, 'active' => 1]) }}">
                        100
                    </a>
                </div>
            </div>
        @else
            @if($countAplications > 0 && $aplications[0] != NULL)
                <div class="flex justify-center w-full my-10 btn-group">
                    <a class="btn" href="{{ route('myAplications', ['page' => $page, 'count' => 10]) }}">
                        10
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['page' => $page, 'count' => 20]) }}">
                        20
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['page' => $page, 'count' => 50]) }}">
                        50
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['page' => $page, 'count' => 100]) }}">
                        100
                    </a>
                </div>
            @endif
        @endif
    </div>
@endsection