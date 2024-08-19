@Vite('resources/views/components/sections/event/event.sass')

<section class="event-section">
    <h2 class="event-title">Event Summary</h2>
    <p class="event-description">We give you a brief overview of the event to give you a glimpse of what we're doing
        in the Green Haven Project, download the detailed PDF to see how you can get involved</p>

    <div class="event-preview-card">
        <div class="event-preview-card-info">
            <h4>26/04/2024</h4>
            <h5>08:00 - 11:00 WIB</h5>
            <p>Join the impactful journey of planting mangroves,
                where you'll learn, collaborate with locals, earn recognition,
                and share your story through media coverage</p>

            <hr />

            <x-button title="View Event Details" classVariant="primary" />
        </div>

        <div class="event-preview-card-sliders">
            <button class="event-sliders-btn-left">
                <img src="{{ Vite::asset('resources/images/arrow-left.png') }}" alt="">
            </button>
            <img src="{{ Vite::asset('resources/images/event/event-preview.png') }}" alt="">
            <button class="event-sliders-btn-right">
                <img src="{{ Vite::asset('resources/images/arrow-right.png') }}" alt="">
            </button>
        </div>
    </div>

    <div class="event-timeline">
        <div class="event-timeline-item">
            <hr class="event-timeline-line-active" />
            <h5>01</h5>
            <p>Introducing the beauty
                of mangroves on a journey to the planting site.</p>
        </div>
        <div class="event-timeline-item">
            <hr />
            <h5>02</h5>
            <p>Introducing the beauty
                of mangroves on a journey to the planting site.</p>
        </div>
        <div class="event-timeline-item">
            <hr />
            <h5>03</h5>
            <p>Introducing the beauty
                of mangroves on a journey to the planting site.</p>
        </div>
        <div class="event-timeline-item">
            <hr />
            <h5>04</h5>
            <p>Introducing the beauty
                of mangroves on a journey to the planting site.</p>
        </div>
        <div class="event-timeline-item">
            <hr />
            <h5>05</h5>
            <p>Introducing the beauty
                of mangroves on a journey to the planting site.</p>
        </div>
    </div>
</section>
