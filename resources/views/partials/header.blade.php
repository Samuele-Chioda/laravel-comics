<header>
    <section class="logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="Logo">
    </section>
    <section class="navbar">
        <ul>
            @foreach($headerLinks as $link)
                <li class="{{ $link['active'] ? 'active' : '' }}">
                    <a href="#">{{ $link['name'] }}</a>
                </li>
            @endforeach
        </ul>
    </section>
</header>
