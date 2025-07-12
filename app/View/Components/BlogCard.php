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
    public string $url;
    public string $imageWrapperClass;

    public function __construct($cardCls , $class ,$src , $alt , $h4 , $p , $url = '#' , $imageWrapperClass = '')
    {
        $this->cardCls = $cardCls;
        $this->class = $class;
        $this->src = $src;
        $this->alt = $alt;
        $this->h4 = $h4;
        $this->p = $p;
        $this->url = $url;
        $this->imageWrapperClass = $imageWrapperClass ?: 'featured-investment-image-dev';

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.blog-card');
    }
}
