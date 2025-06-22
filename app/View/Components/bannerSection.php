<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class bannerSection extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title,
                  $subtitle,
                  $image,
                  $class,
                  $buttonText,
                  $buttonLink,
                    $buttonClass;

    public function __construct(string $title, string $subtitle, string $image, string $class, string $buttonText= "" , string $buttonLink = "" , string $buttonClass = "" )
    {
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->image = $image;
        $this->class = $class;
        $this->buttonText = $buttonText;
        $this->buttonLink = $buttonLink;
        $this->buttonClass = $buttonClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.banner-section');
    }
}
