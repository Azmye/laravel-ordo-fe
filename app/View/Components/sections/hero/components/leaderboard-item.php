<?php

namespace App\View\Components\sections\hero\components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LeaderboardItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public int $index, public string $title, public string $name, public int $score)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sections.hero.components.leaderboard-item');
    }
}
