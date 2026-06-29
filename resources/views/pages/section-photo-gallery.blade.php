<section id="photo-gallery" class="students-life section light-background">
    <div class="container">

        <div class="section-title">
            <h2>Photo Gallery and Moments</h2>
        </div>

        <div class="moments-gallery">
            <div class="row g-3">
                @foreach ($photo_gallery as $index => $gallery)
                    <div class="col-md-6 col-lg-4">
                        <a href="{{ $gallery->image_url }}" class="moment-item glightbox" data-gallery="campus-moments">
                            <img src="{{ $gallery->image_url }}" alt="{{ $gallery->title }}" class="img-fluid" loading="lazy">
                            <div class="moment-overlay">
                                <i class="bi bi-arrows-fullscreen"></i>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        {{-- moments-gallery --}}

    </div>
    {{-- -container --}}
</section>
{{-- Section Photo Gallery --}}
