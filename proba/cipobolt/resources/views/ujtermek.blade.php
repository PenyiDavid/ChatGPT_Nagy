<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Új termék') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Adja meg az új termék adatait!") }}
                </div>
                <div>
                    <form method="POST" action="{{ route('ujtermek.store') }}">
                        @csrf

                        <div>
                            <x-input-label for="termek_neve" :value="__('Termék neve')" />
                            <x-text-input id="termek_neve" class="block mt-1 w-full" type="text" name="termek_neve"/>
                            <x-input-error :messages="$errors->get('termek_neve')" class="mt-2" />
                        </div>

                        <div class="mt-4">
                            <x-input-label for="ar" :value="__('Ár (Ft)')" />
                            <x-text-input id="ar" class="block mt-1 w-full" type="number" name="ar" min="0" :value="0" />
                            <x-input-error :messages="$errors->get('ar')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="meret" :value="__('Méret')" />
                            <x-text-input id="meret" class="block mt-1 w-full" type="number" name="meret" min="32" max="47" :value="32" />
                            <x-input-error :messages="$errors->get('meret')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="darabszam" :value="__('Készleten (db)')" />
                            <x-text-input id="darabszam" class="block mt-1 w-full" type="number" name="darabszam" min="0" :value="0" />
                            <x-input-error :messages="$errors->get('darabszam')" class="mt-2" />
                        </div>
                        <div class="mt-4">
                            <x-input-label for="eleresi_ut" :value="__('Kép elérése')" />
                            <x-text-input id="eleresi_ut" class="block mt-1 w-full" type="text" name="eleresi_ut" :value="old('eleresi_ut')" />
                            <x-input-error :messages="$errors->get('eleresi_ut')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            
                            <x-primary-button class="ms-4">
                                <input type="submit">
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@if(session()->has('success'))
    <p>
        {{ session()->get('success') }}
    </p>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif