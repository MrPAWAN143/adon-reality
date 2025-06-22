<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Event extends Component
{
    /**
     * Create a new component instance.
     */
    public string $image;
    public string $alt;
    public string $title;
    public string $dateTime;
    public string $buttonText;
    public string $class;

    public function __construct(string $image, string $alt, string $title, string $dateTime, string $buttonText, string $class)
    {
        $this->image = $image;
        $this->alt = $alt;
        $this->title = $title;
        $this->dateTime = $dateTime;
        $this->buttonText = $buttonText;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.event');
    }
}
