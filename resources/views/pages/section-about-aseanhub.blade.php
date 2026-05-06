<section id="hero" class="hero section light-background">
    <div class="container" data-aos="fade-up">

        <div class="hero-block">
            <div class="row align-items-center g-4 g-xl-5">
                <div class="col-lg-7">
                    <div class="hero-copy">
                        <h1>{{ $about_aseanhub?->title ?? 'Default Title' }}</h1>
                        <p>{!! $about_aseanhub?->description ?? 'Default description' !!}</p>
                        <div class="hero-btns">
                            <a href="{{ route('register') }}" class="btn-tour">
                                <i class="text-danger fas fa-thumbs-up"></i>Join Competition
                            </a>
                            <a href="{{ route('login') }}" class="btn-tour">
                                <i class="text-danger fas fa-right-to-bracket"></i>Sign In
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="hero-visual">
                        <img src="{{ $about_aseanhub?->image_url }}" class="img-fluid campus-photo" alt="">
                    </div>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </div>
        {{-- hero-block --}}

    </div>
    {{-- container --}}
</section>
{{-- section --}}
