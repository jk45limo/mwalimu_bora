@extends('admin.layout')
@section('title', 'Manage Events')
@section('content')
 <!--begin::Toolbar-->
 <div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
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
            <a href="{{ route('manageevents.create') }}" class="btn btn-sm btn-primary" >Add New Event</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
    <!--begin::Calendar Widget 1-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bolder text-dark">School Calendar</span>
                <span class="text-muted mt-1 fw-bold fs-7">All important dates</span>
            </h3>
            <div class="card-toolbar">
                <a href="{{ route('manageevents.create') }}" class="btn btn-primary">Add New Event</a>
            </div>
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body">
            <!--begin::Calendar-->
            <div id="calendar"></div>
            <!--end::Calendar-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Calendar Widget 1-->
@endsection