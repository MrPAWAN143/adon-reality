<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class awards extends Component
{
    /**
     * Create a new component instance.
     */
    public string $image;
    public string $title;
    public string $by;
    public string $description;
    public string $alt;
    public string $class;
    public string $buttonText;
    public string $buttonClass;
    

    public function __construct( $image = "" ,  $title = "", $by = "", $description = "",  $alt ="",  $class ="",  $buttonText = "",  $buttonClass = "" )
    {
        $this->image = $image;
        $this->title = $title;
        $this->by = $by;
        $this->description = $description;
        $this->alt = $alt;
        $this->class = $class;
        $this->buttonText = $buttonText;
        $this->buttonClass = $buttonClass;
    
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.awards');
    }
}
