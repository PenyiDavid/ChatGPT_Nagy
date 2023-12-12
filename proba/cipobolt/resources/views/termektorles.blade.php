
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Termék törlése') }}
        </h2>
    </x-slot> 
       
        <div class="py-12"> 
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">   
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <p>{{ __("Válasszon az alábbi termékek közül:") }}</p>           
                    </div>
                    <div>
                        <ul>
                            @foreach($termekek as $termek)
                                <li><a href="{{ $termek->id}}.php"><p>{{ $termek->termek_neve }}</p>
                                    <p><img src="{{ $termek->eleresi_ut}}.jpg" alt="Kép" width="200"></p></a>
                                    <p>{{ $termek->ar}}Ft</p>
                                    <p>{{ $termek->meret }}-os méret</p>
                                    <p>{{ $termek->darabszam}}db raktáron</p>
                                    <p>------------------------------------</p>
                                </li>
                            @endforeach
                        </ul>
                    </div>   
                </div>
            </div>
        </div>
</x-app-layout>

@section('content')

    <h1>Users</h1>

    <ul>
        @foreach($termekek as $termek)
            <li>{{ $termek->termek_neve }}</li>
            {{-- További adatok megjelenítése --}}
        @endforeach
    </ul>
@endsection