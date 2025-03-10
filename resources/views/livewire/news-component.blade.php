<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="sec-heading center">
                    <p>@lang('crud.news')</p>
                    <h2><span class="theme-cl">@lang('crud.news')</span></h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($news as $item)
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="education_block_grid style_2">
                        <div class="education_block_thumb n-shadow">
                            <a href="{{ route('news.show', $item->id) }}">
                                <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid" alt="{{ $item->{'title_' . session('locale')} ?? $menu->title_uz }}">
                            </a>
                        </div>
                        <div class="education_block_body">
                            <h4 class="bl-title">
                                <a href="{{ route('news.show', $item->id) }}">{{ $item->{'title_' . session('locale')} ?? $menu->title_uz }}</a>
                            </h4>

                            <div class="blog-details">
                                <p>{!! Str::limit($item->{'content_' . session('locale')}, 200, '...') !!}</p>
                            </div>
                        </div>
                        <div class="education_block_footer">
                            <div class="education_block_author">
                                <span class="education_block_time"><i class="ti-calendar mr-1"></i>{{ $item->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="text-center">
                    <a href="{{ route('news') }}" class="btn btn-theme btn-browse-btn">@lang('crud.new.more')</a>
                </div>
            </div>
        </div>
    </div>
</section>
