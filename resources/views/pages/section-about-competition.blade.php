<section id="about-competition" class="hero section light-background">
    <div class="container"> {{-- data-aos="fade-up" --}}

        <div class="section-title">
            <h2>About Competition</h2>
        </div>

        <div class="event-block">
            <div class="row align-items-center gy-4">
                <div class="col-1">
                    <div class="event-cal">
                        <span class="ec-month">{{ $about_competition->event_month }}</span>
                        <span class="ec-day">{{ $about_competition->event_day }}</span>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="event-info">
                        <span class="event-tag">{{ $about_competition->tag ?? '-' }}</span>
                        <h3>{!! $about_competition->title ?? '-' !!}</h3>
                        <p>{!! $about_competition->description ?? '-' !!}</p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="event-actions">
                        <a href="{{ route('register') }}" class="btn-rsvp">
                            <i class="fa-solid fa-thumbs-up me-2"></i>Join Competition
                        </a>
                    </div>
                </div>
                {{-- col --}}
            </div>
            {{-- row --}}
        </div>
        {{-- event-block --}}

        <div class="event-block">
            <div class="row align-items-center gy-4">
                <div class="col-lg-8">
                    <div class="event-info">
                        <h3>{!! $about_competition->title_tor ?? '-' !!}</h3>
                        <p>{!! $about_competition->description_tor ?? '-' !!}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="event-actions">
                        @if ($about_competition->file_url)
                            <a href="{{ $about_competition->file_url }}" class="btn-rsvp" download>
                                <i class="fas fa-download me-2"></i>Download
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- event-block --}}

        <div class="features-block">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <article class="feat-card">
                        <span class="feat-number">01</span>
                        <div class="feat-icon"><i class="fa-solid fa-address-card"></i></div>
                        <h3>Registration</h3>
                        <p>Create your account and complete the registration process to participate in the competition.</p>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="feat-card">
                        <span class="feat-number">02</span>
                        <div class="feat-icon"><i class="fa-solid fa-file-lines"></i></div>
                        <h3>Submission</h3>
                        <p>Submit your design proposal in accordance with the competition guidelines and deadlines.</p>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="feat-card">
                        <span class="feat-number">03</span>
                        <div class="feat-icon"><i class="fa-solid fa-file-circle-check"></i></div>
                        <h3>Assessment</h3>
                        <p>Your work will be evaluated by a panel of professional judges based on innovation, impact, and feasibility.</p>
                    </article>
                </div>
                <div class="col-lg-3 col-md-6">
                    <article class="feat-card">
                        <span class="feat-number">04</span>
                        <div class="feat-icon"><i class="fa-solid fa-bullhorn"></i></div>
                        <h3>Announcement</h3>
                        <p>Winners will be officially announced and recognized for their outstanding contributions to urban design.</p>
                    </article>
                </div>
            </div>
        </div>
        {{-- features-block --}}

    </div>
    {{-- container --}}
</section>
{{-- section --}}
