<x-app-layout>
    @include('components.navbar')

    <section class="Authentication">
        <div class="container login">
            <h1>Signup</h1>
            <form action="{{ route('login') }}" method="POST">
                @csrf

                <div class="input_group">
                    <input type="text" name="username" id="username" placeholder="Username">
                </div>

                <div class="input_group">
                    <input type="email" name="email" id="email" placeholder="Email Address">
                </div>

                <div class="input_group">
                    <input type="password" name="password" id="password" placeholder="Password">
                </div>

                <div class="input_group">
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                </div>

                <button type="submit">Signup</button>
            </form>

            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </section>
</x-app-layout>
