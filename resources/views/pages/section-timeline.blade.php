<section id="alumni" class="alumni section light-background">
    <div class="container"> {{-- data-aos="fade-up" --}}

        <div class="section-title">
            <h2>Timeline & Event</h2>
        </div>

        <div class="row gatherings-section">
            @foreach ($timelines as $item)
                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="gathering-card">
                        <div class="gathering-header align-items-center">
                            <div class="gathering-badge {{ $item->phase_color }}">
                                <span class="badge-day">
                                    {{ $loop->iteration }}
                                </span>
                            </div>
                            <h4 class="fw-semibold">{{ $item->title }}</h4>
                        </div>
                        <div class="gathering-body">
                            <p class="text-muted">
                                {{ $item->description }}
                                {{ $item->date_range }}
                            </p>
                            @if ($item->is_current)
                                <span class="badge bg-success-subtle text-success" style="padding: 10px 10px;">
                                    Current Phase
                                </span>
                            @endif
                        </div>
                    </div>

                </div>
                {{-- col --}}
            @endforeach
        </div>
        {{-- row --}}

    </div>
    {{-- container --}}
</section>
{{-- section --}}
