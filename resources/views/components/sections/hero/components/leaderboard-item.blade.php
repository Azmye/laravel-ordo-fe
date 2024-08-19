@Vite('resources/views/components/sections/hero/components/leaderboard-item.sass')

<div class="leaderboard-item">
    <div class="left">
        <h5 class="leaderboard-item-number item-number-bgcolor{{ $index }}">0{{ $index }}</h5>
        <img class="leaderboard-item-icon" src="{{ $itemIcon }}" alt="">
        <div class="leaderboard-item-info">
            <p class="leaderboard-item-info-title">{{ $title }}</p>
            <h6 class="leaderboard-item-info-name">{{ $name }}</h6>
        </div>
    </div>
    <div class="right">
        <img class="leaderboard-item-icon2" src="{{ Vite::asset('resources/images/tree-icon.png') }}" alt="">
        <p class="leaderboard-item-info2">{{ $trees }}<span>Pohon</span></p>
    </div>
</div>
