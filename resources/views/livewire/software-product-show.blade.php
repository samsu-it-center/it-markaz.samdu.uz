<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Overview -->
                <div class="edu_wraper">
                    <div class="edu_inline_info">
                        <img src="{{ asset('storage/'.$product->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="ed_header_caption">
                        <ul>
                            <li><i class="ti-calendar"></i> {{ $product->updated_at->format('Y-m-d') }}</li>
                        </ul>
                    </div>
                    <h4 class="edu_title">{{ $product->{'name_' . session('locale')} }}</h4>
                    {!! $product->{'description_' . session('locale')} !!}
                </div>

            </div>
        </div>
    </div>
</section>
