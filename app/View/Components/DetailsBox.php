<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DetailsBox extends Component
{
    public $countries;
    public array $stats;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($countries)
    {
        $this->stats = [
            [
                'title' => 'Total',
                'num' => $countries->count()
            ],
            [
                'title' => 'Europe',
                'num' => $countries->where('region', 'Europe')->count()
            ],
            [
                'title' => 'Africa',
                'num' => $countries->where('region', 'Africa')->count()
            ],
            [
                'title' => 'Asia',
                'num' => $countries->where('region', 'Asia')->count()
            ],
            [
                'title' => 'Oceania',
                'num' => $countries->where('region', 'Oceania')->count()
            ],
            [
                'title' => 'Americas',
                'num' => $countries->where('region', 'Americas')->count()
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.details-box');
    }
}
