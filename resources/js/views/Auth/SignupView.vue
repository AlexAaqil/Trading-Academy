<template>
    <section class="Authentication">
        <div class="container login">
            <div class="header">
                <h1>Sign Up</h1>
            </div>

            <div class="custom_form">
                <form action="" method="post">
                    <div class="input_group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>

                    <div class="input_group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Email Address">
                    </div>

                    <div class="input_group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="input_group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    </div>

                    <button type="submit">Signup</button>
                </form>
            </div>

            <p>Already have an account? <router-link :to="{name: 'login'}">Login</router-link></p>
        </div>
    </section>
</template>
