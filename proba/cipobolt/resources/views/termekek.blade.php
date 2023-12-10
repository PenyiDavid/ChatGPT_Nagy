
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Termékek') }}
        </h2>
    </x-slot>   
    <form action="{{ route('filterProducts') }}" method="get">
    <label for="meret">Méret:</label>
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
    <button type="submit">Szűrés</button>
</form>
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