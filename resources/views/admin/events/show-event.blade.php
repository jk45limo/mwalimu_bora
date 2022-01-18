@extends('admin.layout')
@section('title', 'Event details')
@section('content')
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                    <!--begin::Separator-->
                    <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
                    <!--end::Separator-->
                    <!--begin::Description-->
                    <small class="text-muted fs-7 fw-bold my-1 ms-1">Roodito.com</small>
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">

                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="{{ route('manageevents.index') }}" class="btn btn-sm btn-success">Return back</a>
                <!--end::Button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <div class="p-7">
        <div class="card">
            <form action="" class="mx-4 " autocomplete="off" enctype="multipart/form-data">
                <div class="register-step-one">
                    <div class="top-register-step-one">
                        <h5>Event Details</h5>
                    </div>
                    <div class="bottom-register-step-one">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Start Time</label>
                                    <input type="text" value="{{ $event->start->format('l, d-m-y h:i:s a') }}"
                                        class="form-control" placeholder="">

                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">End</label>
                                    <input type="text" value="{{ $event->end->format('l, d-m-y h:i:s a') }}"
                                        class="form-control" placeholder="">

                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Event for</label>
                                    <select name="" class="form-control" id="">
                                        <option value="">{{ $event->event_for }}</option>

                                    </select>

                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Venue</label>
                                    <input type="text" value="{{ $event->event_place }}" class="form-control"
                                        placeholder="">

                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Event Title</label>
                                    <input type="text" value="{{ $event->title }}" class="form-control" placeholder="">

                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="form-label">Description</label>
                                    <textarea name="" value="" class="form-control" id="" cols="30"
                                        rows="5">{{ $event->description }}</textarea>

                                </div>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <a href="{{ route('manageevents.edit', $event->id) }}" class="btn btn-lg btn-primary me-3"
                    data-kt-stepper-action="submit">
                    <span class="indicator-label">Update Event
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1"
                                    transform="rotate(-180 18 13)" fill="black"></rect>
                                <path
                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                </a>
            </form>
        </div>
    </div>

@endsection
