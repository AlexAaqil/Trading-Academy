<x-app-layout>
    @include('components.navbar')

    <main class="Homepage">
        <section class="Hero">
            <div class="container">
                <div class="image">
                    <img src="{{ asset('assets/images/bull.png') }}" alt="Bull-ish">
                </div>
                <h1>Welcome to the Academy</h1>
                <p>We are a top trading academy that focuses on trading in different markets. From stocks, Forex, Commodities and CFD's</p>
                <div class="hero_btn">
                    <a href="{{ route('login') }}">Start</a>
                </div>
            </div>
        </section>
    </main>
</x-app-layout>
