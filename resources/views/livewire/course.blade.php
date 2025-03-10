<section class="bg-light">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 mb-3">
                <div class="sec-heading2">
                    <div class="sec-left">
                        <h3>@lang('crud.course.name')</h3>
                    </div>
                    <div class="sec-right">
                        <a href="{{ route('course.index') }}" class="btn-br-more">@lang('crud.course.more')</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 p-0">

                <div class="arrow_slide three_slide-dots arrow_middle">

                    <!-- Single Slide -->
                    @foreach($courses as $course)
                    <div class="singles_items">
                        <div class="edu_cat">
                            <div class="pic">
                                <a class="pic-main" href="{{ route('course.show',$course->id) }}" style="background-image:url({{ asset('storage/'.$course->image) }});"></a>
                            </div>
                            <div class="edu_data">
                                <h4 class="title"><a href="{{ route('course.show',$course->id) }}">{{ $course->{'title_' . session('locale')} ?? $menu->title_uz }}</a></h4>
                                <p class="description">
                                    {!! Str::limit($course->{'description_' . session('locale')} ?? $course->description_uz, 200, '...') !!}
                                </p>
                                <ul class="meta">
                                    <li class="video"><i class="ti-time"></i>{{ $course->created_at->format('Y-m-d') }}</li>
                                    <li class="lessions"><i class="ti-book"></i>{{ $course->lessons->count() }} @lang('crud.course.lessons') </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>
