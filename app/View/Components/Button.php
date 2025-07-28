<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     */

    public string $text;
    public string $class;
    public string $url;
    public string $dataVideo;


    public function __construct(string $text, string $class, string $url = '#', string $dataVideo = '')
    {

        $this->text = $text;
        $this->class = $class;
        $this->url = $url;
        $this->dataVideo = $dataVideo;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.button');
    }
}
