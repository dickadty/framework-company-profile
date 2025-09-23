<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ServiceCard extends Component
{
    public $icon;
    public $title;
    public $desc;
    public $delay;

    public function __construct($icon, $title, $desc, $delay = '0.1s')
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->desc = $desc;
        $this->delay = $delay;
    }

    public function render()
    {
        return view('components.service-card');
    }
}
