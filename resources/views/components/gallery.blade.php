<div class="rts-brand v_1 rts-padding-100">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-11">
                <div class="rts-brand-slider swiper swiper-data" data-swiper='{
                    "slidesPerView":7,
                    "autoplay": {
                        "delay": 3000
                    },
                    "breakpoints": {
                        "320": { "slidesPerView": 3, "centeredSlides": true },
                        "575": { "slidesPerView": 4, "centeredSlides": true },
                        "768": { "slidesPerView": 5, "centeredSlides": true },
                        "991": { "slidesPerView": 6, "centeredSlides": true },
                        "1201": { "slidesPerView": 7, "centeredSlides": true }
                    }
                }'>
                    <div class="swiper-wrapper">
                        @if($gallerys && $gallerys->count())
                            @foreach($gallerys as $gallery)
                                <div class="swiper-slide">
                                    <div class="single-brand-logo">
                                        <a href="#">
                                            <img class="" src="{{ asset('storage/' . $gallery->image_path) }}" alt="{{ $gallery->description ?? 'Gallery image' }}">
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="swiper-slide">
                                <p>Gallery data not found</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
