<section id="opening-speeches" class="alumni section light-background">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Opening Speech</h2>
        </div>

        <div class="row g-0">
            @foreach ($opening_speeches as $index => $item)
                <div class="col-12 mb-4">
                    <div class="profile-row border-danger">
                        <div class="row align-items-center {{ $index % 2 == 1 ? 'flex-md-row-reverse' : '' }}">

                            {{-- FOTO --}}
                            <div class="col-md-3 text-center">
                                <div class="profile-avatar">
                                    <img src="{{ $item->photo_url }}" alt="{{ $item->name }}" class="img-fluid">
                                </div>
                            </div>

                            {{-- TEXT --}}
                            <div class="col-md-9 {{ $index % 2 == 1 ? 'text-md-end' : '' }}">
                                <div class="profile-info">
                                    <h4 class="fw-bold">{{ $item->name }}</h4>
                                    <span class="current-role fw-semibold">{{ $item->position }}</span>
                                    <p>{!! $item->message !!}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                {{-- col-12 --}}
            @endforeach

        </div>
        {{-- row --}}
    </div>
    {{-- container --}}
</section>
{{-- section --}}

{{-- <section id="about" class="about section light-background">
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
</section><!-- /About Section --> --}}
