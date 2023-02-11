<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MenuList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public array $links;

    public function __construct()
    {
        $this->links = [
            'home' => [
                'name' => 'Strona główna',
                'url' => '/',
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
        return view('components.menu-list');
    }
}
