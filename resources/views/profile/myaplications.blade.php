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
        <x-formAddAplication :pets="$pets" :categories="$categories"/>
    @else
        <x-addButton>
            @if($errors->any() == false)
                {{ __('Добавить заявку') }}
            @else
                {{ __('Закрыть') }}
            @endif
        </x-addButton>
        <x-formAddAplication :pets="$pets" :categories="$categories"/>
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
    @endif
    <div class="flex flex-row my-10">
        @if($countElPage < $countAplications)
            <div class="flex flex-row justify-between w-full">
                {{ $aplications->appends(['count' => $countElPage])->links('vendor.pagination.tailwind') }}
                <div class="btn-group ml-10">
                    <a class="btn" href="{{ route('myAplications', ['count' => 10,'page' => $page]) }}">
                        10
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['count' => 20,'page' => $page]) }}">
                        20
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['count' => 50,'page' => $page]) }}">
                        50
                    </a>
                    <a class="btn" href="{{ route('myAplications', ['count' => 100,'page' => $page]) }}">
                        100
                    </a>
                </div>
            </div>
        @else
        <div class="flex justify-center w-full btn-group">
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
    </div>
@endsection