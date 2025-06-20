<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PagePath extends Component
{
    public string $class;
    public string $path;
    public function __construct( $class , $path)
    {
        $this->class = $class;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-path');
    }
}
