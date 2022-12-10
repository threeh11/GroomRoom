<div class="{{ $errors->any() == false ? 'hidden' : 'block' }}" id="form">
    <form action="{{ route('addAplication') }}" method="post" class="flex flex-col gap-y-3 w-1/3 m-auto">
        @csrf
        <select class="select select-bordered w-full" name="pet">
            @if($pets != NULL)
                <option disabled selected>{{ __('Выберите питомца') }}</option>
                @for($i = 0; $i < $pets->count(); $i++)
                    <option value="{{ $pets[$i]->id }}">
                        {{ __($pets[$i]->type) . ' ' . __($pets[$i]->alias) }}
                    </option>
                @endfor
            @else
                <option disabled selected>{{ __('Нет ниодного питомца') }}</option>
            @endif
        </select>
        @error('pet')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <select class="select select-bordered w-full" name="category">
            @if($categories != NULL)
                <option disabled selected>{{ __('Выберите категорию') }}</option>
                @for($i = 0; $i < $categories->count(); $i++)
                    <option value="{{ $categories[$i]->id }}">
                        {{ __($categories[$i]->name) }}
                    </option>
                @endfor
            @else
                <option disabled selected>{{ __('Нет ниодной категории') }}</option>
            @endif
        </select>
        @error('category')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <select class="select select-bordered w-full" name="place">
            <option disabled selected>{{ __('Выберите место приема') }}</option>
            <option value="salon">{{ __('В салоне') }}</option>
            <option value="home">{{ __('На дому') }}</option>   
        </select>
        @error('place')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <input class="input input-bordered w-full" type="text" name="date" id="date" placeholder="Выберите дату приема"
        value="{{ old('date') }}" min="{{ date('Y-m-d') }}" max="{{ $dateEnd }}">
        @error('date')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <input class="input input-bordered w-full" type="text" name="time" id="time" placeholder="Выберите время приема"
        value="{{ old('time') }}" min="09:00" max="18:00">
        @error('time')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <input class="flex m-auto btn bg-[#3d4451]" type="submit" value="Добавить" id="submitForm">
    </form>
</div>