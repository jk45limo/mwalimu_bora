@extends('admin.layout')
@section('title','All Teachers')
@section('content')
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">All Teachers</h1>
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
                <!--begin::Menu-->
                <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black" />
                    </svg>
                </span>
                  
                <!--end::Menu 1-->
                <!--end::Menu-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="{{ url('admin/enroll-new-teacher') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">Register New Teacher</a>
            <!--end::Button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body p-0">
                <!--begin::Wrapper-->
                @if ($teachers->count() == 0)
                    <div class="card-px text-center py-20 my-10">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bolder mb-10">Welcome!</h2>
                    <!--end::Title-->
                    <!--begin::Description-->
                    <p class="text-gray-400 fs-4 fw-bold mb-10">There are no enrolled  teachers yet.
                    <br />Kickstart your Teachers page by enrolling your first teacher</p>
                    <!--end::Description-->
                    <!--begin::Action-->
                    <a href="{{ url('admin/enroll-new-teacher') }}" class="btn btn-primary" >Enrol Now</a>
                    <!--end::Action-->
                    <div class="text-center px-4">
                        <img class="mw-100 mh-300px" alt="" src="{{ asset('backend\assets\media\illustrations\sketchy-1\sketchy-1-2.png')}}" />
                    </div>
                </div>
                @else  <div class="card-px text-left py-20 my-10">
                    <div class="table-responsive">
                      
                        <table class="table table-row-dashed table-row-gray-900 align-middle gs-0 gy-4" id="allrevisions">
                            <thead>
                                <tr>
                                    <th>Full Names</th>
                                    <th>Phone Number</th>
                                    <th>Subject Combination</th>
                                    <th>Gender</th>
                                    <th>Teaching Level</th>
                                    <th>TSC  Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead><tbody>
                    @foreach ($teachers as $teacher)
                   
                            
                                <tr>
                                    <td>{{ $teacher->teacheruser->name }}</td>
                                    <td>{{ $teacher->phone_number }}</td>
                                    <td>{{ $teacher->subject_combination }}</td>
                                    <td>{{ $teacher->gender }}</td>
                                    <td>{{ $teacher->teaching_level }}</td>
                                    <td>{{ $teacher->tsc_number }}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
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
                                                    <a href="{{ url('admin/manage-teachers/'.$teacher->id) }}" class="menu-link px-3">View</a>
                                                </div>
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('admin/manage-teachers/edit/'.$teacher->id) }}" class="menu-link px-3">Edit</a>
                                                </div>
                                                <!--end::Menu item-->
                                                <!--begin::Menu item-->
                                                <div class="menu-item px-3">
                                                    <a href="{{ url('admin/manage-teachers/delete/'.$teacher->id) }}" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                                </div>
                                                <!--end::Menu item-->
                                            </div>
                                            <!--end::Menu-->
                               
                                    </td>
                                </tr>
            
                    @endforeach               
                 </tbody>
                        </table>
                    </div>
                    </div>
                @endif
                
                <!--end::Wrapper-->
                <!--begin::Illustration-->
               
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
      
    </div>
    <!--end::Container-->
    
</div>

@endsection