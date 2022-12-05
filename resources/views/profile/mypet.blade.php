@extends('layouts.base')

@section('title', __('Мои питомцы'))
    
@section('main')
    @if($pets == NULL)
        <x-addButton>
            {{ __('Добавить питомца') }}
        </x-addButton>
        <x-formAddPets/>
    @else
        <x-addButton>
            {{ __('Добавить питомца') }}
        </x-addButton>
        <x-formAddPets/>
        <div class="mt-10">
        <table class="table w-full">
          <thead>
            <tr>
              <th>{{ __('ID') }}</th>
              <th>{{ __('Кличка') }}</th>
              <th>{{ __('Вид') }}</th>
              <th>{{ __('Пол') }}</th>
            </tr>
          </thead>
          <tbody>
            @for($i = 0; $i < $pets->count(); $i++)
                <tr>
                  <th>{{ $pets[$i]->id }}</th>
                  <th>{{ $pets[$i]->alias }}</th>
                  <th>{{ $pets[$i]->type }}</th>
                  <th class="w-[200px]">{{ $pets[$i]->male }}</th>
                  <th class="w-[10px]">
                    <a class="btn bg-[#303640]" href="{{ route('editPet', $pets[$i]->id) }}">EDIT</a>
                  </th> 
                  <th class="w-[10px]">
                      <form action="{{ route('deletePet', $pets[$i]->id) }}" method="post">
                        @csrf
                        <input class="cursor-pointer btn bg-[#303640]" type="submit" value="DELETE">
                      </form>
                  </th>
                </tr>
            @endfor
          </tbody>
        </table>
      </div>
    @endif
@endsection
