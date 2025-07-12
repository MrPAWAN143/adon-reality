<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class featuredInvestmentSection extends Component
{
    /**
     * Create a new component instance.
     */
    public string $src;
    public string $alt;
    public string $heading;
    public string $location;
    public string $rera;
    public string $status;
    public string $roi;
    public string $developer;
    public string $variety;
    public string $size;
    public string $price;
    public string $url;
    public string $imageClass;
    public string $featuredCardClass;

    public function __construct(string $src, string $alt, string $heading, string $location, string $rera, string $status, string $roi, string $developer, string $variety, string $size, string $price, string $url= '', string $imageClass = '', string $featuredCardClass = '')
    {
        $this->src = $src;
        $this->alt = $alt;
        $this->heading = $heading;
        $this->location = $location;
        $this->rera = $rera;
        $this->status = $status;
        $this->roi = $roi;
        $this->developer = $developer;
        $this->variety = $variety;
        $this->size = $size;
        $this->price = $price;
        $this->url = $url;
        $this->imageClass = $imageClass ?: 'featured-investment-img';
        $this->featuredCardClass = $featuredCardClass ?: 'featured-investment-image-dev';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.featured-investment-section');
    }
}
