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
                    <h2 class="edu_title">{{ $product->{'title_' . session('locale')} }}</h2>
                    <p>{!! $product->{'description_' . session('locale')} !!}</p>
                    <h3>@lang('crud.start_up.project_purpose')</h3>
                    <p>{!! $product->{'project_objective_' . session('locale')} !!}</p>
                    <h3>@lang('crud.start_up.opportunities_tasks')</h3>
                    <p>{!! $product->{'opportunities_tasks_' . session('locale')} !!}</p>
                    <h3>@lang('crud.start_up.price')</h3>
                    <p>{!! $product->{'budget_' . session('locale')} !!}</p>
                </div>

            </div>
        </div>
    </div>
</section>
