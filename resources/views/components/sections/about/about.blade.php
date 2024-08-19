@Vite('resources/views/components/sections/about/about.sass')

<section class="about-section">
    <div class="about-logo">
        <img src="{{ Vite::asset('resources/images/about/jci-eastjava.png') }}" alt="">
        <img class="second-img" src="{{ Vite::asset('resources/images/about/green-haven-project.png') }}" alt="">
    </div>

    <h2 class="about-title">About Green Haven Project</h2>

    <p class="about-description">The Green Haven Project - Mangrove aims to restore coastal ecosystems and raise
        awareness by planting mangroves
        and educating participants about the importance of these areas. This six-hour event will involve JCI members,
        local farmers, and students, focusing on combating beach erosion and promoting ESG values.</p>

    <div class="about-project">
        <div class="about-project-image">
            <img src="{{ Vite::asset('resources/images/about/image-before.png') }}" alt="">
            <p>Before mangroves were planted</p>
        </div>
        <div class="about-project-transition">
            <img src="{{ Vite::asset('resources/images/about/curve-arrow.png') }}" alt="">
            <p>TRANSFORMATION</p>
        </div>
        <div class="about-project-image">
            <img src="{{ Vite::asset('resources/images/about/image-after.png') }}" alt="">
            <p>After mangroves were planted</p>
        </div>
    </div>
</section>
