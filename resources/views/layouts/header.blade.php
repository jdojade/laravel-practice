<nav>
    <ul>
        <li>
            <a href="{{ route('home') }}" class="{{ request()->is('home') ? 'active': '' }}">home</a>
        </li>
        
        <li>
            <a href="{{ route('items2') }}" class="{{ request()->is('items2') ? 'active': '' }}">items2</a>
        </li>

        <li>
            <a href="{{ route('items3') }}" class="{{ request()->is('items3') ? 'active': '' }}">items3</a>
        </li>
        <li>
            <a href="{{ route('params','s1') }}" class="{{ request()->is('params/*') ? 'active': '' }}">params</a>
        </li>
    </ul>
</nav>