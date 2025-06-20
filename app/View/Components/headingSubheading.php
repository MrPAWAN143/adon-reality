<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class headingSubheading extends Component
{
    /**
     * Create a new component instance.
     */
    public string $heading;
    public string $subheading;
    public string $headingClass;
    public string $subHeadingClass;
    public function __construct(string $heading, string $subheading, string $headingClass, string $subHeadingClass)
    {
        $this->heading = $heading;
        $this->subheading = $subheading;
        $this->headingClass = $headingClass;
        $this->subHeadingClass = $subHeadingClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.heading-subheading');
    }
}
