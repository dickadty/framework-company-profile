<div class="card">
    <div class="card-body">
        <h3 class="card-title">{{ $title }}</h3>
        @if($subtitle)
            <p class="card-subtitle">{{ $subtitle }}</p>
        @endif

        {{-- slot untuk konten kustom --}}
        <div class="card-content">
            {{ $slot }}
        </div>
    </div>
</div>
