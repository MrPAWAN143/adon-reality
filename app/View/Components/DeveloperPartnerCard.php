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
    public string $developerButtonClass;
    public string $buttonText;
    public string $mobileClass;

    public function __construct(string $heading, string $description, string $partnerLogo, string $alt, string $projectsPartnered, string $presence, string $url= '', string $developerButtonClass = 'development-partner-button', string $buttonText = 'Explore Projects', string $mobileClass = '')
    {
        $this->heading = $heading;
        $this->description = $description;
        $this->partnerLogo = $partnerLogo;
        $this->alt = $alt;
        $this->projectsPartnered = $projectsPartnered;
        $this->presence = $presence;
        $this->url = $url;
        $this->developerButtonClass = $developerButtonClass ?: 'development-partner-button';
        $this->buttonText = $buttonText ?: 'Explore Projects';
        $this->mobileClass = $mobileClass;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.developer-partner-card');
    }
}
