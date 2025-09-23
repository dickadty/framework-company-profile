<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $courses = [
            ['title' => 'Laravel Basics', 'desc' => 'Pengenalan Laravel dan Blade.'],
            ['title' => 'Advanced Blade', 'desc' => 'Components, Directives & Stacks.'],
            ['title' => 'Web UI Design', 'desc' => 'Membuat UI mirip eLearning.'],
        ];

        return view('pages.home', compact('courses'));
    }

    public function courses()
    {
        return view('pages.courses');
    }

    public function about()
    {
        return view('pages.about');
    }


    public function contact()
    {
        return view('pages.contact');
    }
}
