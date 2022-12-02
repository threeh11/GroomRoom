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
            @for($i = 0; $i < $aplications->count(); $i++)
                <tr>
                <th>{{ $aplications[$i]->id }}</th>
                <th>{{ $aplications[$i]->pet->type . ' ' . $aplications[$i]->pet->alias }}</th>
                <th>{{ $aplications[$i]->type }}</th>
                <th>{{ $aplications[$i]->place }}</th>
                <th>{{ $aplications[$i]->date }}</th>
                <th>{{ $aplications[$i]->time }}</th>
                </tr>
            @endfor
        </tbody>
        </table>
        </div>
    @endif
@endsection