<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ChooseAdonReality extends Component
{
    /**
     * Create a new component instance.
     */
    public string $content;
    public string $icon;
    public function __construct(string $content = "", string $icon = "")
    {
        $this->content = $content;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.choose-adon-reality');
    }
}
