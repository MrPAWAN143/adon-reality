<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogCard extends Component
{
    /**
     * Create a new component instance.
     */
    public string $cardCls;
    public string $class;
    public string $src;
    public string $alt;
    public string $h4;
    public string $p;
 
    public function __construct($cardCls , $class ,$src , $alt , $h4 , $p)
    {
        $this->cardCls = $cardCls;
        $this->class = $class;
        $this->src = $src;
        $this->alt = $alt;
        $this->h4 = $h4;
        $this->p = $p;


    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-card');
    }
}
