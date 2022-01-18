@extends('admin.layout')
@section('title', 'Edit Blog Articles')
@section('content')
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">All Blogs</h1>
            <!--end::Title-->
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('admin')}}" class="text-muted text-hover-primary">My Dashboard</a>
                </li>
                <!--end::Item-->

            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center py-1">
            <!--begin::Wrapper-->
            <div class="me-4">


                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="" class="btn btn-sm btn-warning">Return Back</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<div class="container-fluid ">
    <div class="card py-5 px-5">
        <!--begin::Content-->
        <div class="d-flex flex-stack mb-5">
            <!--begin::Title-->
            <h3 class="text-black">Edit Blog</h3>
            <!--end::Title-->
        </div>
        <!--end::Content-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mb-9"></div>
        <div class="row g-10">

            <div class="card-xl-stretch ms-md-6">
                <div class="mt-5 mr-5 col-lg-11 col-sm-11 col-xs-11 col-md-11">
                    <form  method="POST" action="{{ url('admin/blogs/edit_blog/'.$blog->id) }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            @method('PATCH')
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{ $blog->title }}" class="form-control">
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Picture</label>
                            <input type="file" name="picture" class="form-control">
                            @error('picture')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Description</label>

                            <textarea name="description" id="" class="form-control" cols="30"
                                rows="10">{{ $blog->description }}</textarea>
                            @error('description')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-lg btn-warning me-3" data-kt-stepper-action="submit">
                            <span class="indicator-label">Update  Blog
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                <span class="svg-icon svg-icon-3 ms-2 me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
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
                        </button>
                    </form>
                </div>

            </div>
        </div>
        <!--end::Row-->
    </div>
</div>



@endsection