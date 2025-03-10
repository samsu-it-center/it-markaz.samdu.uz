<div class="banner-search splide" aria-label="Basic Structure Example">
    <div class="splide__track">
        <ul class="splide__list">
            @foreach($sliders as $slider)
                <li class="splide__slide">
                    <div class="splide__slide__container">
                        <img src="{{ asset('storage/'.$slider->image) }}" alt="{{ $slider->title_uz }}">
                    </div>
                    <h2 class="text-center">{{ $slider->{'title_' . session('locale')} }}</h2>
                </li>
            @endforeach
        </ul>
    </div>
</div>
