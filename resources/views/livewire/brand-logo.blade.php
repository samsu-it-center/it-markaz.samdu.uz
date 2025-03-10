<section class="pt-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="sec-heading center">
                    <h2 class="my-4 text-center">@lang('crud.brands')</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="single_brand" id="brand-slide">
                    @foreach($brands as $brand)
                        <div class="single_brands">
                            <img src="{{ asset('storage/'.$brand->image_path) }}" class="img-fluid" alt="{{ $brand->name }}" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
