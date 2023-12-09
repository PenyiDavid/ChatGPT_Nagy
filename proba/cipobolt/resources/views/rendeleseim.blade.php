<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Rendelések:') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Korábban rendelt termékei:") }}
                </div>
                <div>
                    @forelse($rendeleseim as $rendeles)
                        <li><p>{{ $rendeles->id}}</p>
                            <p>{{ $rendeles->termek_id }}</p>
                            <p>{{ $rendeles->szallitasi_cim}}</p>
                        <p>------------------------------------</p>
                        </li>
                    @empty
                    <p>Nincs korábbi rendelése.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
