<header>
    <div id="logo">
        <a href="/">
            <img src="{{ asset('img/dc-logo.png') }}" alt="logo DC Comics">
        </a>
    </div>
    <div id="menu">
        <ul>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('characters') ? 'active' : '' }}"
                    href="{{ route('characters') }}">characters</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('comics') ? 'active' : '' }}" href="{{ route('comics') }}">comics</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('movies') ? 'active' : '' }}" href="{{ route('movies') }}">movies</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('tv') ? 'active' : '' }}" href="{{ route('tv') }}">tv</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('games') ? 'active' : '' }}" href="{{ route('games') }}">games</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('collectibles') ? 'active' : '' }}"
                    href="{{ route('collectibles') }}">collectibles</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('videos') ? 'active' : '' }}" href="{{ route('videos') }}">videos</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('fans') ? 'active' : '' }}" href="{{ route('fans') }}">fans</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('news') ? 'active' : '' }}" href="{{ route('news') }}">news</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li>
                {{-- legge il name della rotta --}}
                <a class="{{ request()->is('shop') ? 'active' : '' }}" href="{{ route('shop') }}">Shop</a>
                {{-- operatore ternario: se la richiesta è uguale alla rotta (non al name!) aggiungi la classe active, altrimenti nulla --}}
            </li>
            <li class="search">
                <input type="text" name="" id="" placeholder="Search">
                <i class="fas fa-search"></i>
            </li>
        </ul>
    </div>
</header>
