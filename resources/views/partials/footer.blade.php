    <footer>
        <section class="left-sec">
            <button>Sign-up now!</button>
        </section>
        <section class="right-sec">
            <h1>Follow us</h1>
            <div class="logos">
                @foreach ($loghi as $logo)
                    <div class="logo">
                        <img src="{{ $logo['thumb'] }}" alt="{{ $logo['logo1'] }}">
                    </div>
                @endforeach
        </section>
    </footer>
