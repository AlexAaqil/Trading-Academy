<template>
    <main class="Homepage">
        <section class="Hero">
            <div class="container">
                <div class="image">
                    <img src="../../assets/images/bull.png" alt="Bull-ish" />
                </div>

                <div class="text">
                    <h1>
                        Welcome to the <br />
                        Academy
                    </h1>
                    <p>
                        We are a top trading academy that focuses on trading in
                        different markets. <br> From stocks, Forex, Commodities and
                        CFD's
                    </p>
                    <div class="hero_btn">
                        <router-link :to="{ name: 'login' }">Start</router-link>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>
