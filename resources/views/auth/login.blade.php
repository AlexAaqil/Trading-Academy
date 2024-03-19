<x-app-layout>
    @include('components.navbar')

    <section class="Authentication">
        <div class="container login">
            <h1>Welcome Back</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="input_group">
                    <input type="email" name="email" id="email" placeholder="Email Address" autofocus>
                </div>

                <div class="input_group">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>

                <div class="input_group">
                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                </div>

                <button type="submit">Login</button>
            </form>

            <p>Don't have an account? <a href="{{ route('register') }}">Signup</a></p>
        </div>
    </section>
</x-app-layout>
