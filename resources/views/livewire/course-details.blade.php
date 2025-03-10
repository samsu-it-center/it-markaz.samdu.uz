<section class="bg-light">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-md-12">

                <!-- Overview -->
                <div class="edu_wraper">
                    <h4 class="edu_title">{{ $course->{'title_' . session('locale')} }}</h4>
                    {!! $course->{'description_' . session('locale')} !!}
                </div>

                <!-- Submit Reviews -->
                <div class="edu_wraper">
                    <h4 class="edu_title">@lang('crud.course.form.title')</h4>
                    <div class="review-form-box form-submit">
                        <form action="{{ route('course.apply') }}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('crud.course.form.course')</label>
                                        <select class="form-control" wire:model="selectedCourse">
                                            <option value="">@lang('crud.course.name')</option>
                                            @foreach($courses as $course)
                                                <option value="{{ $course->id }}">{{ $course->{'title_' . session('locale')} }}</option>
                                            @endforeach
                                        </select>
                                        @error('selectedCourse') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('crud.course.form.first_name')</label>
                                        <input class="form-control" type="fname" name="fname" placeholder="...">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('crud.course.form.last_name')</label>
                                        <input class="form-control" type="lname" name="lname" placeholder="...">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('crud.course.form.email')</label>
                                        <input class="form-control" type="email" name="email" placeholder="...">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('crud.course.form.phone')</label>
                                        <input class="form-control" type="text" name="phone" placeholder="...">
                                    </div>
                                </div>



                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>@lang('crud.course.form.msg')</label>
                                        <textarea name="msg" id="msg" class="form-control" placeholder="@lang('crud.course.form.msg')">...</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-theme">@lang('crud.course.form.apply_now')</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        @if (session()->has('success'))
                            <div class="alert alert-success mt-3">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
