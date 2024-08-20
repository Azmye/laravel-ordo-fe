@Vite('resources/views/components/sections/supports/supports.sass')

<section class="supports-section">
    <h2 class="supports-title">Donate Today and be a
        Guardian of the Green Belt.</h2>

    <p class="supports-description">Join us in our mission to rejuvenate and protect our shorelines
        by donating to our mangrove planting project. </p>


    <div class="supports-galleries">
        <img src="{{ Vite::asset('resources/images/supports/supp-1.png') }}" alt="">
        <img src="{{ Vite::asset('resources/images/supports/supp-2.png') }}" alt="">
        <img src="{{ Vite::asset('resources/images/supports/supp-3.png') }}" alt="">
        <img src="{{ Vite::asset('resources/images/supports/supp-4.png') }}" alt="">
        <img src="{{ Vite::asset('resources/images/supports/supp-5.png') }}" alt="">

        <div class="supports-btn">
            <x-button title="Support Our Mission" />
        </div>
    </div>
</section>
