@extends('layouts.base')

@section('title', __('Профиль'))
    
@section('main')
    <div class="p-6 bg-white rounded-2xl my-10">
        <h3 class="text-3xl">
            {{ $aplication->pet->alias }}
        </h3>
        <p>
            {{ $aplication->type }}
        </p>
        <p>
            {{ $aplication->date . ' ' . $aplication->time }}
        </p>
    </div>
@endsection