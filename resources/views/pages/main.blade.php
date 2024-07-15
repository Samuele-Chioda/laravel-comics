<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-template</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

    <main>
        <div class="jumbo-section">
            <img src="../img/jumbotron.jpg" alt="">
        </div>
        <div class="black-section">
            <section class="immagini">
                <div class="cards">
                        @foreach ($comicsCards as $card)
                        <section class="card">
                        <img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}">
                        <p>{{ $card['title'] }}</p>
                    </section>
                        @endforeach
                </div>
            </section>
        </div>
        <div class="blue-section">

            <section class="last-photo d-flex">
                {{-- <img src="{{ $}}" alt=""> --}}
                <p>infoooooooooo</p>
            </section>
        </div>
        <div class="center-section">
            <section id="lists">
                <div class="list first-list">
                    <ul>
                        <li>
                            <a href="">cliccami</a>
                        </li>
                    </ul>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <a href="">cliccami</a>
                        </li>
                    </ul>
                </div>
                <div class="list">
                    <ul>
                        <li>
                            <a href="">cliccami</a>
                        </li>
                    </ul>
                </div>
            </section>

            <div class="logo-grande">
            {{-- <img class="logo-grande" src="{{ asset('img/dc-logo-bg.png') }}" alt="logo-grande"> --}}
        </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>
