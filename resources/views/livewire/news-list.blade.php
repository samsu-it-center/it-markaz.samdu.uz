<div>
    <!-- ============================ Page Title Start ================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">@lang('crud.news')</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">@lang('crud.home')</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@lang('crud.news')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ========================== Articles Section =============================== -->
    <section class="pt-0">
        <div class="container">
            <div class="row">
                @foreach($news as $item)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="articles_grid_style">
                            <div class="articles_grid_thumb">
                                <a href="{{ route('news.show', $item->id) }}">
                                    <img src="{{ asset('storage/'.$item->image) }}" class="img-fluid"
                                         alt="{{ $item->title }}">
                                </a>
                            </div>
                            <div class="articles_grid_caption">
                                <a href="{{ route('news.show', $item->id) }}">{{ $item->{'title_' . session('locale')} }}</a>

                                <p>{!! Str::limit($item->{'content_' . session('locale')}, 200, '...') !!}</p>
                                <div class="articles_grid_author">
                                    <h4 class="mr-2"><i class="ti-calendar"></i> {{ $item->created_at->format('Y-m-d') }}</h4>
                                    <h4><i class="ti-eye"></i> {{ $item->views }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Load More Button -->
            @if(count($news) >= $perPage)
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                        <button wire:click="loadMore" class="btn btn-loader">
                            @lang('crud.more')<i class="ti-reload ml-3"></i>
                        </button>
                    </div>
                </div>
            @endif
        </div>
    </section>
    <!-- ========================== Articles Section End =============================== -->

</div>
