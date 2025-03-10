<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Overview -->
                <div class="edu_wraper">
                    <div class="edu_inline_info">
                        <img src="{{ asset('storage/'.$news->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="ed_header_caption">
                        <ul>
                            <li><i class="ti-calendar"></i> {{ $news->updated_at->format('Y-m-d') }}</li>
                            <li><i class="ti-eye"></i> {{ $news->views }}</li>
                        </ul>
                    </div>
                    <h4 class="edu_title">{{ $news->{'title_' . session('locale')} }}</h4>
                    {!! $news->{'content_' . session('locale')} !!}
                </div>

                <div class="single_article_pagination">
                    @if($prevNews)
                        <div class="prev-post">
                            <a href="{{ route('news.show', $prevNews->id) }}" class="theme-bg">
                                <div class="title-with-link">
                                    <span class="intro">@lang('crud.prev')</span>
                                </div>
                            </a>
                        </div>
                    @endif

                    <div class="article_pagination_center_grid">
                        <a href="{{ route('news') }}"><i class="ti-layout-grid3"></i></a>
                    </div>

                    @if($nextNews)
                        <div class="next-post">
                            <a href="{{ route('news.show', $nextNews->id) }}" class="theme-bg">
                                <div class="title-with-link">
                                    <span class="intro">@lang('crud.next')</span>
                                </div>
                            </a>
                        </div>
                    @endif
                </div>

            </div>
        </div>
    </div>
</section>
