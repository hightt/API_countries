<?php

namespace App\View\Components\Countries;

use Illuminate\View\Component;

class CountriesTable extends Component
{
    public array $headers;
    public $countries;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(array $headers, $countries)
    {
        //
        $this->headers = $headers;
        $this->countries = $countries;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.countries.countries-table');
    }
}
