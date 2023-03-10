<?php

namespace App\View\Components\countries\details;

use Illuminate\View\Component;

class CountryDetails extends Component
{
    public $country;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($country)
    {
        $this->country = $country;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.countries.details.country-details');
    }
}
