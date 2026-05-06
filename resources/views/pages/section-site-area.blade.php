<section id="site-area" class="campus-facilities section light-background">
    <div class="container"> {{-- data-aos="fade-up" --}}

        <div class="section-title">
            <h2>Site Area on ASEAN Hub</h2>
        </div>

        <div class="facilities-showcase">

            @foreach ($site_area as $index => $item)
                @php $isReverse = $index % 2 != 0; @endphp

                <div class="row align-items-center gy-5 {{ !$loop->last ? 'mb-5' : 'mb-0' }}">

                    {{-- IMAGE --}}
                    <div class="col-lg-6 {{ $isReverse ? 'order-lg-2' : '' }}">
                        <div class="showcase-image">
                            <img src="{{ $item->image_url }}" alt="{{ $item->title }}" class="img-fluid">
                        </div>
                    </div>

                    {{-- CONTENT --}}
                    <div class="col-lg-6 {{ $isReverse ? 'order-lg-1' : '' }}">
                        <div class="showcase-content text-center">
                            <h3>{{ $item->title }}</h3>
                            <p>{!! $item->description !!}</p>
                            @if ($item->file_url)
                                <a href="{{ $item->file_url }}" class="discover-link" target="_blank" download>
                                    <i class="fas fa-download"></i> Download Map
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        {{-- facilities-showcase --}}

    </div>
    {{-- container --}}
</section>
{{-- section --}}
