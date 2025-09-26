<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CourseCard extends Component
{
    public $image;
    public $title;
    public $price;
    public $stars;
    public $reviews;
    public $instructor;
    public $duration;
    public $students;
    public $readMore;
    public $joinNow;
    public $delay;

    public function __construct(
        $image,
        $title,
        $price = '$149.00',
        $stars = 5,
        $reviews = 0,
        $instructor = 'Unknown',
        $duration = '0 Hrs',
        $students = 0,
        $readMore = '#',
        $joinNow = '#',
        $delay = '0.1s'
    ) {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->stars = $stars;
        $this->reviews = $reviews;
        $this->instructor = $instructor;
        $this->duration = $duration;
        $this->students = $students;
        $this->readMore = $readMore;
        $this->joinNow = $joinNow;
        $this->delay = $delay;
    }

    public function render()
    {
        return view('components.course-card');
    }
}
