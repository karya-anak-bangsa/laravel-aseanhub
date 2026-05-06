<section id="opening-speeches" class="alumni section light-background">
    <div class="container">

        <div class="section-title">
            <h2>Opening Speech</h2>
        </div>

        <div class="row mb-5">
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
