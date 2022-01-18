@extends('admin.layout')
@section('title','Tutor Profile')
@section('content')
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Tutor Profile</h1>
            <!--end::Title-->
            <!--begin::Separator-->
            <span class="h-20px border-gray-200 border-start mx-4"></span>
            <!--end::Separator-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('admin')}}" class="text-muted text-hover-primary">{{ $tutor->tutoruser->name}}</a>
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
            <a href="{{ route('managetutors.index') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">All Tutor</a>
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
        <div class="row">
            <div class="col-lg-4 col-xs-12 col-md-4 col-sm-5">
                <div class="teacher-profile">
                    <div class="top-teacher-profile">
                        <img src="{{ asset('backend/assets/media/illustrations/sketchy-1/images (12).jpg') }}" alt="">
                    </div>
                    <div class="bottom-teacher-profile">
                        <h3>{{$tutor->tutoruser->name}}</h3> 
                        <section>
                            
                            <span>{{ $tutor->phone_number}}</span>
                            <span>{{ $tutor->tutoruser->email}}</span>
                            <span>{{ $tutor->address}}</span>
                           
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xs-12 col-md-8 col-sm-7">
                <div class="teacher-profile-content">
                    <ul class="nav nav-pills" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Account</button>
                        </li>
                    
                      </ul>
                      {{-- <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="teacher-about-content">
                                <div class="top-teacher-about-content">
                                    <div class="row row-contents">
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">  
                                            <section>
                                                <span><strong><i class="fas fa-graduation-cap"></i></strong></span>
                                                <span><strong>University:</strong></span>
                                                <span>{{ $teacheruser->university}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-graduation-cap"></i></strong></span>
                                                <span><strong>Subjects</strong></span>
                                                <span>{{ $teacheruser->primary_subject}}, {{ $teacheruser->other_subject}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-university"></i></strong></span>
                                                <span><strong>Teaching Level</strong></span>
                                                <span>{{ $teacheruser->teaching_level}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-glass-cheers"></i></strong></span>
                                                <span><strong>Other Education:</strong></span>
                                                <span>{{ $teacheruser->primary_school}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-user-graduate"></i></strong></span>
                                                <span><strong>Secondary Education:</strong></span>
                                                <span>{{ $teacheruser->secondary_school}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-file-word"></i></strong></span>
                                                <span><strong>Teacher Cv:</strong></span>
                                                <span>{{ $teacheruser->secondary_school}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-users"></i></strong></span>
                                                <span><strong>Classes Teaching:</strong></span>
                                                <span>{{ $teacheruser->classes_teaching}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            
                                    <section>
                                        <span><strong><i class="fas fa-laptop-code"></i></strong></span>
                                        <span><strong>Designation Code:</strong></span>
                                        <span>{{ $teacheruser->designation_code}}</span>
                                    </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-code-branch"></i></strong></span>
                                                <span><strong>Other Associations:</strong></span>
                                                <span>{{ $teacheruser->other_associations}}</span>
                                            </section>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                                            <section>
                                                <span><strong><i class="fas fa-user-shield"></i></strong></span>
                                                <span><strong>KRA Pin:</strong></span>
                                                <span>{{ $teacheruser->kra_pin}}</span>
                                            </section>
                                        </div>
                                    </div> 
                                    <hr>
                                    <h4><strong>Professional Summary</strong></h4>
                                    <p>{{ $teacheruser->professional_summary }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="teacher-account-content">
                                <div class="row">
                                    <div class="col-12">
                                        
                                            <section>
                                                <span><strong><i class="fas fa-user-shield"></i></strong></span>
                                                <span><strong>Download CV</strong></span>
                                                <span><a href="" class="btn btn-primary">{{ $teacheruser->uploaded_cv}}</a></span>
                                            </section>
                                      
                                    </div>    
                                </div>    
                            </div>    
                        </div> 
                      </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!--end::Container-->
    
</div>

@endsection