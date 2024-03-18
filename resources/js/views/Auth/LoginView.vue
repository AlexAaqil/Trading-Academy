<template>
    <section class="Authentication">
        <div class="container login">
            <div class="header">
                <h1>Welcome Back</h1>
            </div>

            <div class="custom_form">
                <form action="" method="post">
                    <div class="input_group">
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>

                    <div class="input_group">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="input_group">
                        <a href="">Forgot your password?</a>
                    </div>

                    <button type="submit">Login</button>
                </form>
            </div>

            <p>Don't have an account? <router-link :to="{name: 'signup'}">Signup</router-link></p>
        </div>
    </section>
</template>
