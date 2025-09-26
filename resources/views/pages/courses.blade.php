@extends('layouts.app')

@section('title', 'Courses')

@section('content')

    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <x-category-card image="assets/img/cat-1.jpg" title="Web Design" :courses="49" delay="0.1s"
                            colClass="col-lg-12 col-md-12" />

                        <x-category-card image="assets/img/cat-2.jpg" title="Graphic Design" :courses="49"
                            delay="0.3s" colClass="col-lg-6 col-md-12" />

                        <x-category-card image="assets/img/cat-3.jpg" title="Video Editing" :courses="49" delay="0.5s"
                            colClass="col-lg-6 col-md-12" />
                    </div>
                </div>
                <x-category-card image="assets/img/cat-4.jpg" title="Online Marketing" :courses="49" delay="0.7s"
                    colClass="col-lg-5 col-md-6" :fullHeight="true" />
            </div>
        </div>
    </div>
    <!-- Categories End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <x-course-card image="assets/img/course-1.jpg" title="Web Design & Development Course for Beginners"
                    price="$149.00" :stars="5" :reviews="123" instructor="John Doe" duration="1.49 Hrs"
                    :students="30" readMore="#" joinNow="#" delay="0.1s" />

                <x-course-card image="assets/img/course-2.jpg" title="UI/UX Design Masterclass" price="$199.00"
                    :stars="4" :reviews="89" instructor="Jane Smith" duration="2.5 Hrs" :students="50"
                    readMore="#" joinNow="#" delay="0.3s" />

                <x-course-card image="assets/img/course-3.jpg" title="Video Editing with Premiere Pro" price="$129.00"
                    :stars="5" :reviews="200" instructor="Mark Lee" duration="3 Hrs" :students="70"
                    readMore="#" joinNow="#" delay="0.5s" />
            </div>
        </div>
    </div>
    <!-- Courses End -->

@endsection
