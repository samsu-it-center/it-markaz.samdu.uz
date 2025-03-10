@extends('layouts.app')
@section('content')
    <!-- ============================ Page Title Start================================== -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="breadcrumbs-wrap">
                        <h1 class="breadcrumb-title">@lang('crud.contact_message.contact')</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">@lang('crud.home')</a></li>
                                <li class="breadcrumb-item active"
                                    aria-current="page">@lang('crud.contact_message.contact')</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Agency List Start ================================== -->
    <section class="bg-light">

        <div class="container">

            <!-- row Start -->
            <div class="row">

                <div class="col-lg-8 col-md-7">
                    <div class="prc_wrap">

                        <div class="prc_wrap_header">
                            <h4 class="property_block_title">@lang('crud.contact_message.title')</h4>
                        </div>

                        <div class="prc_wrap-body">
                            <form action="{{ route('contact.apply') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>@lang('crud.contact_message.name')</label>
                                            <input type="text" class="form-control simple" name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <div class="form-group">
                                            <label>@lang('crud.contact_message.phone')</label>
                                            <input type="text" class="form-control simple" name="phone">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>@lang('crud.contact_message.message')</label>
                                    <textarea class="form-control simple" name="message"></textarea>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-theme" type="submit">@lang('crud.send')</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

                <div class="col-lg-4 col-md-5">

                    <div class="prc_wrap">

                        <div class="prc_wrap_header">
                            <h4 class="property_block_title">@lang('crud.data')</h4>
                        </div>

                        <div class="prc_wrap-body">
                            <div class="contact-info">

                                <h2>@lang('crud.data')</h2>
                                <p>@lang('crud.center.about') </p>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-home"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">@lang('crud.about.location')</h4>
                                        Universitet xiyoboni 15 - uy
                                    </div>
                                </div>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-email"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">@lang('crud.center.mail')</h4>
                                        itmarkaz@samdu.uz
                                    </div>
                                </div>

                                <div class="cn-info-detail">
                                    <div class="cn-info-icon">
                                        <i class="ti-mobile"></i>
                                    </div>
                                    <div class="cn-info-content">
                                        <h4 class="cn-info-title">@lang('crud.center.call_us')</h4>
                                        +998 93 728 68 67
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /row -->

        </div>

    </section>
    <!-- ============================ Agency List End ================================== -->
@endsection
