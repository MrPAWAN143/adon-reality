<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactUsForm extends Component
{
    /**
     * Create a new component instance.
     */
    public string $heading;
    public string $subheading;

    public function __construct(string $heading, string $subheading)
    {
        $this->heading = $heading;
        $this->subheading = $subheading;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-us-form');
    }
}
