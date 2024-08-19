@Vite('resources/views/components/sections/hero/hero.sass')

<section>
    <div class="container left-container">
        <div class="inner-container">
            <h5 class="title">Green Haven Project - Mangrove</h5>

            <h3 class="subtitle">Green Horizons Await, Join Us in Planting 10,000 Mangroves!</h3>

            <div class="card">
                <div class="inner-card">
                    <div class="info">
                        <img src="{{ Vite::asset('resources/images/tree-icon.png') }}" alt="">
                        <p class="info-title">5,690<span>/10,000 Pohon</span></p>
                    </div>

                    <x-button classVariant="primary" title="Support Our Mission" />
                </div>

                <div class="slider">
                    <div class="progress"></div>
                </div>
            </div>
        </div>

        <img class="hero-banner" src="{{ Vite::asset('resources/images/hero-banner.png') }}" alt="">


    </div>
    <div class="container right-container">
        <img class="bg-image" src="{{ Vite::asset('resources/images/Leaderboard-background.png') }}" alt="">

        <h3 class="subtitle2">Leaderboard</h3>

        <div class="buttons">
            <x-button title="Most Donation" classVariant="primary-outline" />
            <x-button title="Most Donation" classVariant="gray-outline" />
        </div>

        <div class="leaderboard">
            <x-sections.hero.components.leaderboard-item title="Mangrove Maven" name="Mangrove Maven" score="10,000"
                index="1" />
        </div>
    </div>
</section>
