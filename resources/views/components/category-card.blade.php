<div class="{{ $colClass }} wow zoomIn" data-wow-delay="{{ $delay }}">
    <a class="position-relative d-block {{ $fullHeight ? 'h-100' : '' }} overflow-hidden" href="{{ $link }}">
        <img class="img-fluid {{ $fullHeight ? 'position-absolute w-100 h-100' : '' }}" 
             src="{{ asset($image) }}" 
             alt="{{ $title }}" 
             style="{{ $fullHeight ? 'object-fit: cover;' : '' }}">
        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
            <h5 class="m-0">{{ $title }}</h5>
            <small class="text-primary">{{ $courses }} Courses</small>
        </div>
    </a>
</div>
