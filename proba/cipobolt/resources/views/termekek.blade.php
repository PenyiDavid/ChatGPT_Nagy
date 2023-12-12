
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Termékek') }}
        </h2>
    </x-slot> 
        <div class="center-horizontally">  
            <form action="{{ route('filterProducts') }}" method="get">
                <label for="meret" style="color: white;">Méret:</label>
                <select name="meret" id="meret">
                    <option value="32">32</option>
                    <option value="33">33</option>
                    <option value="34">34</option>
                    <option value="35">35</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>  
                    <option value="41">41</option>
                    <option value="42">42</option>
                    <option value="43">43</option>
                    <option value="44">44</option>
                    <option value="45">45</option>
                </select>
                
                <label for="min_ar" style="color: white;">Min. ár:</label>
                <input type="number" name="min_ar" id="min_ar" >

                <label for="max_ar" style="color: white;">Max. ár:</label>
                <input type="number" name="max_ar" id="max_ar" >
                <button type="submit" class="filter-button">Szűrés</button>
                <button type="button" onclick="location.href='{{ route('termek.clearFilters') }}'" class="filter-button">Szűrők törlése</button>
            </form>
        </div>
        <<div class="py-12"> 
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">   
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <p>{{ __("Válasszon az alábbi termékek közül:") }}</p>           
            </div>
            <div>
                <ul>
                    @foreach($termekek->chunk(5 ) as $chunk)
                        <div class="flex justify-content-center align-items-center">
                            @foreach($chunk as $termek)
                                <li class="mr-4">
                                    <a href="{{ $termek->id}}.php">
                                        <p>{{ $termek->termek_neve }}</p>
                                        <p><img src="{{ $termek->eleresi_ut}}.jpg" alt="Kép" width="200"></p>
                                        <p>{{ $termek->ar}}Ft</p>
                                        <p>{{ $termek->meret }}-os méret</p>
                                        <p>{{ $termek->darabszam}}db raktáron</p>
                                        @if(Auth::check() && Auth::user()->admin)
                                        <form action="{{ route('termek.torles', $termek->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="filter-button">Törlés</button>
                                        </form>
                                        @endif
                                        <p>------------------------------------</p>
                                    </a>
                                </li>
                            @endforeach
                        </div>
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