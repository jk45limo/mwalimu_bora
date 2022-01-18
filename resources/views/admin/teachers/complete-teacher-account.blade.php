@extends('admin.layout')
@section('title','Enroll New Teacher')
@section('content')
<div class="toolbar" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Complete Teacher Registration</h1>
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
               
            </div>
            <!--end::Wrapper-->
            <!--begin::Button-->
            <a href="{{ url('admin/all-teachers') }}" class="btn btn-sm btn-primary" id="kt_toolbar_primary_button">All Teachers</a>
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
                <div class="card-px  py-20 my-3">
                    
                    <form action="{{ url('admin/complete_teacher_account/'.$teacher) }}" method="POST" autocomplete="off">
                        @csrf
                        @method("PATCH")
                          <div class="row">
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Primary Subject</label>
                                    <br>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <label for="primary-english">
                                                <input type="checkbox" id="primary-english"   value="English" name="primary_subject"   > <span>English</span>
                                            </label>
                                            
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <label for="primary-cre">
                                                        <input type="checkbox" id="primary-cre" name="primary_subject"  value="CRE"> <span>CRE</span>
                                            </label>
                                    
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"> 
                                            <label for="primary-ire">
                                                <input type="checkbox" name="primary_subject" id="primary-ire"  value="IRE"> <span>IRE</span>
                                            </label>
                                            
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <label for="primary-swahili">
                                                    <input type="checkbox" name="primary_subject" id="primary-swahili"  value="Kiswahili"> <span>Kiswahili</span>
                                            </label>
                                        
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <label for="primary-maths">
                                                <input type="checkbox" name="primary_subject"  value="Maths" id="primary-maths"> <span>Maths</span>
                                            </label>
                                        
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <label for="primary-science">
                                                <input type="checkbox" name="primary_subject"  value="Science" id="primary-science"> <span>Science</span>
                                            </label>
                                        
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <label for="primary-social">
                                                <input type="checkbox" name="primary_subject"  value="Social Studies" id="primary-social"> <span>Social Studies</span>
                                            </label>
                                        
                                        </div>
                                    </div> 
                                    @error('primary_subject')
                                    <small class="text-danger">{{$message }}</small>
                                @enderror
                                </div>
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Other Subjects</label>
                                    <br>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <input type="checkbox" name="other_subjects" id="" value="English"> <span>English</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <input type="checkbox" name="other_subjects" id="" value="CRE"> <span>CRE</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"> 
                                            <input type="checkbox" name="other_subjects" id="" value="IRE"> <span>IRE</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <input type="checkbox" name="other_subjects" id="" value="Kiswahili"> <span>Kiswahili</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <input type="checkbox" name="other_subjects" id="" value="Maths"> <span>Maths</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                        <input type="checkbox" name="other_subjects" id="" value="Science"> <span>Science</span>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">
                                            <input type="checkbox" name="other_subjects" id="" value="Social Studies"> <span>Social Studies</span>
                                        </div>
                                    </div>
                                </div>
                                @error('other_subjects')
                                <small class="text-danger">{{$message }}</small>
                            @enderror
                            </div>
                            <br>
                            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Classes You Teach</label>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="All" > <span>All</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="Grade 1"> <span>Grade/Class 1</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="Grade 2"> <span>Grade/Class 2</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="Grade 3"> <span>Grade/Class 3</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="grade 4"> <span>Grade/Class 4</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="Grade 5"> <span>Grade/Class 5</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="Grade 6"> <span>Grade/Class 6</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"><input type="checkbox" name="classes_you_teach" id="" value="Grade 7"> <span>Grade/Class 7</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4"> <input type="checkbox" name="classes_you_teach" id="" value="Grade 8"> <span>Grade/Class 8</span></div>
                                        <div class="col-lg-3 col-md-3 col-xs-6 col-sm-4">  <input type="checkbox" name="classes_you_teach" id="" value="KCPE"> <span>KCPE</span></div>
                                    </div>
                                    @error('classes_you_teach')
                                    <small class="text-danger">{{$message }}</small>
                                @enderror
                                </div>
                            </div>
                          </div> 
                        <div class="d-flex flex-stack pt-15">
                            <!--begin::Wrapper--> 
                                <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" style="cursor: not-allowed;display:none;">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                <span class="svg-icon svg-icon-4 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="black"></rect>
                                        <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="black"></path>
                                    </svg>
                                </span>
                                </button>
                            </div>
                            
                            <div>
                    
                                    <button type="submit" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit 
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                    <span class="svg-icon svg-icon-3 ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black"></rect>
                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></span>
                                    <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button> 
                        
                            
                            
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </form>
                </div>
                 
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modals-->
        <!--begin::Modal - Customers - Add-->
     
        <!--end::Modal - Customers - Add-->
        <!--end::Modals-->
    </div>
    <!--end::Container-->
</div>
 
@endsection