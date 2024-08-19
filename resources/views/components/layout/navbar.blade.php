@vite(['resources/views/components/layout/navbar.sass'])

<nav>
    <img class="logo" src="{{ Vite::asset('resources/images/logo.png') }}" alt="Green Haven">

    <ul>
        <li>About Green Haven</li>
        <li>Event Details</li>
        <li>Our Sponsors</li>
        <li>Leaderboard</li>
    </ul>

    <x-button title="Plant a Mangrove" classVariant="primary-outline" />
</nav>