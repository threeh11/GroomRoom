<div class="{{ $errors->any() == false ? 'hidden' : 'block' }}" id="form">
    <form action="{{ route('myPet.store') }}" method="post" class="flex flex-col gap-y-3 w-1/3 m-auto">
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
        <div class="hidden badge badge-error gap-2" id="maleError">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-4 h-4 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            <p class="p-2">
                {{ "Вы не выбрали пол!" }}
            </p>
        </div>
        <input class="input input-bordered w-full" data-date-format="DD.MM.YYYY" type="text" name="date" id="date" placeholder="Введите дату рождения животного" value="{{ old('date') }}" max="{{ date('Y-m-d') }}">
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
        <input class="flex m-auto btn bg-[#3d4451]" type="button" value="Добавить" id="submitFormEditPet">
    </form>
</div>