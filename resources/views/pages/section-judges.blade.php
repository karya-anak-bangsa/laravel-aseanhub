<section id="judges" class="leadership section light-background">
    <div class="container">

        {{-- Section Title --}}
        <div class="section-title">
            <h2>Our Judges on ASEAN Hub</h2>
        </div>

        <div class="staff-showcase">

            {{-- Judges List --}}
            <div class="row g-4">
                @foreach ($judges as $item)
                    <div class="col-lg-3 col-md-6">
                        <div class="staff-card">
                            <div class="card-image">
                                <img
                                    src="{{ $item->photo_url }}"
                                    alt="{{ $item->judges_name }}"
                                    class="img-fluid"
                                    loading="lazy">
                            </div>
                            <div class="card-body">
                                <h4>{{ $item->judges_name ?? '-' }}</h4>
                                <span class="role">{{ $item->origin_country ?? '-' }}</span>
                                <p class="excerpt">{{ $item->origin_institution ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>
