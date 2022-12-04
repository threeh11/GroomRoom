<div class="{{ $errors->any() == false ? 'hidden' : 'block' }}" id="form">
    <form action="{{ route('addPet') }}" method="post" class="flex flex-col gap-y-3 w-1/3 m-auto">
        @csrf
        <input class="input input-bordered w-full" type="text" name="alias" placeholder="Введите кличку животного" value='{{ old('alias') }}'>
        @error('alias')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <input class="input input-bordered w-full" type="text" name="type" placeholder="Введите вид животного" value='{{ old('type') }}'>
        @error('type')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <p>{{ __('Выберите пол') }}</p>
        <div class="flex flex-row">
            <label class="pr-3" for="maleM" id="maleM_label">{{ __('Мужской') }}</label>
            <input class="radio" type="radio" name="maleM" id="maleM" @checked(old('maleM') == 'on')>
            <label class="px-3" for="maleW" id="maleW_label">{{ __('Женский') }}</label>
            <input class="radio" type="radio" name="maleW" id="maleW" @checked(old('maleW') == 'on')>
        </div>
        <input class="input input-bordered w-full" type="text" name="date" id="date" placeholder="Введите дату рождения животного" value='{{ old('date') }}'>
        @error('date')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <input class="input input-bordered w-full" type="text" name="race" placeholder="Введите породу животного" value='{{ old('race') }}'>
        @error('race')
            <x-error>
                {{ $message }}
            </x-error>
        @enderror
        <input class="flex m-auto btn bg-[#3d4451]" type="submit" value="Добавить" id="submitForm">
    </form>
</div>