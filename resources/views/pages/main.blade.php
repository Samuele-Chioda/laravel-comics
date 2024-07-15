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
                @foreach ($fiveImg as $img)
                    <div class="last-photo d-flex">
                        <img src="{{ $img['thumb'] }}" alt="{{ $img['info'] }}">
                        <p>{{ $img['info'] }}</p>
                    </div>
                @endforeach
            </div>
        <div class="center-section">
            <section id="lists">
                <div class="list first-list" id="margin-bottom">
                    <ul>
                        @foreach ($FooterLinksFirst as $FooterLinkFirst)
                        <li>
                            <a href="#"> {{$FooterLinkFirst['name']}} </a>
                        </li>
                        @endforeach
                    </ul>
                    <ul>
                        @foreach ($FooterLinksFirstShop as $FooterLinkFirstShop)
                        <li>
                            <a href="#"> {{$FooterLinkFirstShop['name']}} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="list third-list">
                    <ul>
                        @foreach ($FooterLinksSecond as $FooterLinkSecond)
                        <li>
                            <a href="#"> {{$FooterLinkSecond['name']}} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="list fourth-list">
                    <ul>
                        @foreach ($FooterLinksThird as $FooterLinkThird)
                        <li>
                            <a href="#"> {{$FooterLinkThird['name']}} </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </section>

            <div class="logo-grande">
                <img src="../img/dc-logo-bg.png" alt="">
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>
