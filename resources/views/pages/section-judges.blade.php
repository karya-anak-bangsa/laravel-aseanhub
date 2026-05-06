<section id="leadership" class="leadership section light-background">
    <div class="container">
        <div class="staff-showcase">

            <div class="row justify-content-center mb-5">
                <div class="col-lg-7 text-center">
                    <h2 class="heading">Our Judges</h2>
                    <p class="blurb mb-0">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error inventore, mollitia ut eum voluptatum nam porro rerum natus. Consectetur, velit corporis dolores ea delectus cupiditate aliquid! Incidunt iste a voluptatibus.
                    </p>
                </div>
            </div>

            <div class="row g-4">

                @foreach ($judges as $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="staff-card">
                            <div class="card-image">
                                <img src="{{ $item->photo_url }}" alt="{{ $item->judges_name }}" class="img-fluid" loading="lazy">
                            </div>
                            <div class="card-body">
                                <h4>{{ $item->judges_name ?? '-' }}</h4>
                                <p class="excerpt">{{ $item->origin_country ?? '-' }} - {{ $item->origin_institution ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</section>
