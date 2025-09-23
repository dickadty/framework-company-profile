<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoryCard extends Component
{
    public $image;
    public $title;
    public $courses;
    public $delay;
    public $colClass;
    public $link;
    public $fullHeight;

    public function __construct(
        $image, 
        $title, 
        $courses = 0, 
        $delay = '0.1s', 
        $colClass = 'col-lg-6 col-md-12', 
        $link = '#',
        $fullHeight = false
    ) {
        $this->image = $image;
        $this->title = $title;
        $this->courses = $courses;
        $this->delay = $delay;
        $this->colClass = $colClass;
        $this->link = $link;
        $this->fullHeight = $fullHeight;
    }

    public function render()
    {
        return view('components.category-card');
    }
}
