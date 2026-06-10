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

<section id="about" class="about section light-background">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5 align-items-stretch">
            <div class="col-lg-5" data-aos="fade-right" data-aos-delay="150">
                <div class="campus-showcase">
                    <img src="{{ asset('img/hero-monas-2.webp') }}" alt="University Campus" class="img-fluid">
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left" data-aos-delay="200">
                <div class="story-content">
                    <span class="subtitle">Awards</span>
                    <h2>List of Awards for DKI Jakarta</h2>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus viverra maecenas accumsan lacus vel facilisis.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-sm-6">
                            <div class="purpose-block">
                                <h4>Our Mission</h4>
                                <p>Sed porttitor lectus nibh. Nulla quis lorem ut libero malesuada feugiat praesent sapien massa convallis a pellentesque nec.</p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="purpose-block">
                                <h4>Our Vision</h4>
                                <p>Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a viverra.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="purpose-block">
                                <h4>Our Vision</h4>
                                <p>Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a viverra.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="purpose-block">
                                <h4>Our Vision</h4>
                                <p>Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a viverra.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="purpose-block">
                                <h4>Our Vision</h4>
                                <p>Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a viverra.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="purpose-block">
                                <h4>Our Vision</h4>
                                <p>Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit eget tincidunt nibh pulvinar a viverra.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Story Row -->

    </div>

</section><!-- /About Section -->
