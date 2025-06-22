<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class legacyCard extends Component
{
    /**
     * Create a new component instance.
     */
    public string $title, $description, $class , $image, $alt , $descriptionClass , $imgClass;
    public function __construct(string $title = "", string $description = "", string $class = "", string $imgClass= "", string $image = "", string $alt = "", string $descriptionClass = "")
    {
        $this->title = $title;
        $this->description = $description;
        $this->class = $class;
        $this->imgClass = $imgClass;
        $this->image = $image;
        $this->alt = $alt;
        $this->descriptionClass = $descriptionClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.legacy-card');
    }
}
