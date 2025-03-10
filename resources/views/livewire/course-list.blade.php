<div>
    <!-- Page Title -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">@lang('crud.course.name')</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">@lang('crud.home')</a></li>
                                <li class="breadcrumb-item active">@lang('crud.course.name')</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="pt-0">
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-6">
                    <strong>{{ $courses->total() }}</strong> @lang('crud.course.found_courses')
                </div>
                <div class="col-md-6 text-right">
                    <select class="form-control w-auto d-inline" wire:model.live="type">
                        <option value="">@lang('crud.course.all_courses')</option>
                        <option value="online">@lang('crud.course.online')</option>
                        <option value="offline">@lang('crud.course.offline')</option>
                    </select>
                </div>
            </div>

            <div class="row">
                @foreach($courses as $course)
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="education_block_grid style_2">
                            <div class="education_block_thumb n-shadow">
                                <a href="{{ route('course.show',$course->id) }}"><img
                                        src="{{ asset('storage/'.$course->image) }}" class="img-fluid" alt=""></a>
                            </div>
                            <div class="education_block_body">
                                <h4 class="bl-title">
                                    <a href="{{ route('course.show',$course->id) }}">{{ $course->{'title_' . session('locale')} }}</a>
                                </h4>
                                <p>{!! Str::limit($course->{'description_' . session('locale')}, 200, '...') !!}</p>
                            </div>
                            <div class="cources_facts">
                                <ul class="cources_facts_list mb-2">
                                    <li class="facts-{{ $course->type == 'online' ? '1' : '2' }}">
                                        {{ ucfirst($course->type) }}
                                    </li>
                                </ul>
                            </div>

                            <div class="education_block_footer">
                                <div class="education_block_author">

                                </div>
                                <span class="education_block_time"><i class="ti-calendar mr-1"></i>{{ $course->created_at->format('Y-m-d') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination-container text-center">
                        {{ $courses->links('vendor.pagination.bootstrap-4') }}
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>
