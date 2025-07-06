<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DeveloperPartnerCard extends Component
{
    /**
     * Create a new component instance.
     */
    public string $heading;
    public string $description;
    public string $partnerLogo;
    public string $alt;
    public string $projectsPartnered;
    public string $presence;
    public string $url;



    public function __construct(string $heading, string $description, string $partnerLogo, string $alt, string $projectsPartnered, string $presence, string $url= '')
    {
        $this->heading = $heading;
        $this->description = $description;
        $this->partnerLogo = $partnerLogo;
        $this->alt = $alt;
        $this->projectsPartnered = $projectsPartnered;
        $this->presence = $presence;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.developer-partner-card');
    }
}
