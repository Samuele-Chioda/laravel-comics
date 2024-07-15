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
        <div class="black-section">
        </div>
        <div class="blue-section">
            <section class="last-photo d-flex">
                {{-- <img class="info" :src="info.src" :alt="info.alt"> --}}
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
                {{-- <img class="logo-grande" src="../assets/img/img/dc-logo-bg.png" alt="logo-grande"> --}}
            </div>
        </div>
    </main>

    @include('partials.footer')

</body>
</html>
