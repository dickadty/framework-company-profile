<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ $delay }}">
    <div class="course-item bg-light">
        <div class="position-relative overflow-hidden">
            <img class="img-fluid" src="{{ asset($image) }}" alt="{{ $title }}">
            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                <a href="{{ $readMore }}" 
                   class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end" 
                   style="border-radius: 30px 0 0 30px;">Read More</a>
                <a href="{{ $joinNow }}" 
                   class="flex-shrink-0 btn btn-sm btn-primary px-3" 
                   style="border-radius: 0 30px 30px 0;">Join Now</a>
            </div>
        </div>
        <div class="text-center p-4 pb-0">
            <h3 class="mb-0">{{ $price }}</h3>
            <div class="mb-3">
                @for ($i = 0; $i < $stars; $i++)
                    <small class="fa fa-star text-primary"></small>
                @endfor
                <small>({{ $reviews }})</small>
            </div>
            <h5 class="mb-4">{{ $title }}</h5>
        </div>
        <div class="d-flex border-top">
            <small class="flex-fill text-center border-end py-2">
                <i class="fa fa-user-tie text-primary me-2"></i>{{ $instructor }}
            </small>
            <small class="flex-fill text-center border-end py-2">
                <i class="fa fa-clock text-primary me-2"></i>{{ $duration }}
            </small>
            <small class="flex-fill text-center py-2">
                <i class="fa fa-user text-primary me-2"></i>{{ $students }} Students
            </small>
        </div>
    </div>
</div>
