@extends('admin.layout')
@section('title', 'All Blog Articles')
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
            <a href="" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_blog"
                id="kt_toolbar_primary_button">Create New Blog</a>
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
            <h3 class="text-black">All Blogs</h3>
            <!--end::Title-->
        </div>
        <!--end::Content-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mb-9"></div>
        <div class="row g-10">
            @if ($blogs->count() == 0)
    
            @else
            @foreach ($blogs as $blog)
            <div class="col-md-4">
                <div class="card-xl-stretch ms-md-6">
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales"
                        href="{{ asset('storage/blogs/'.$blog->picture) }}">
    
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px"
                            style="background-image:url('{{ asset('storage/blogs/'.$blog->picture) }}')">
                        </div>
    
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="bi bi-eye-fill fs-2x text-white"></i>
                        </div>
                    </a>
                    <div class="mt-5">
                        <a href="#" class="fs-4 text-dark fw-bolder text-hover-primary text-dark lh-base">{{$blog->title}}</a>
    
                        <div class="fw-bold fs-5 text-gray-600 text-dark mt-3">
                            {{ str_limit(strip_tags($blog->description), 150) }}
                            </div>
    
                        <div class="fs-6 fw-bolder mt-5 d-flex flex-stack">
                            <span class="badge border-solid fs-5 fw-bolder text-dark p-2">
                                <span class="fs-5 fw-bold text-muted"></span><small>Last update: {{ $blog->created_at->format('d-m-y') }}</small></span>
                          
                            <a href="#" class="btn btn-sm  btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ url('admin/blogs/view-blog/'.$blog->id) }}" class="menu-link px-3" >View</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        
                                        <a href="{{ url('admin/blogs/edit-blog/'.$blog->id) }}" class="menu-link px-3"  >Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ url('admin/blogs/delete-blog/'.$blog->id) }}" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
    
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
</div>
{{-- CREATE NEW BLOG MODAL --}}
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="kt_modal_create_blog" tabindex="-1"
    aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Create New Blog</h2>
                <!--end::Modal title-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                @livewire('admin.blog.create-new-blog')
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
{{--END CREATE NEW BLOG MODAL --}}

 
@endsection