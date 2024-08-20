<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    {{-- Sass --}}
    @vite(['resources/views/home.sass', 'resources/js/app.js'])
</head>

<body>
    <x-layout.navbar />

    <x-sections.hero.hero :leaderboards="$leaderboards" />

    <x-sections.sponsors.sponsors />

    <x-sections.about.about />

    <x-sections.event.event />

    <x-sections.supports.supports />

    <footer class="footer">
        <h5>Nama yang Mengerjakan Test: Muhammad Azmi</h5>
    </footer>
</body>

</html>
