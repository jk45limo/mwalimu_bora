<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="Admin Dashboard" />
    <meta name="keywords" content="Roodito School Management System" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Dashboard" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Keenthemes | Metronic" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:500,600,700" /> 
    <link href="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" /> 
        <link href="{{ asset('backend/assets/css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/custom.css') }}">
    @livewireStyles
    <link href="{{ asset('backend/assets/css/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
     
</head>
<!--end::Head-->
<!--begin::Body-->
 
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-dark aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <!--begin::Brand-->
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <a href="{{ route('admin') }}">
							<img alt="Logo" src="{{ asset('assets/img/logo.png') }}" class="h-25px logo" />
						</a>
                    <!--end::Logo-->
                    <!--begin::Aside toggler-->
                    <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr079.svg-->
                        <span class="svg-icon svg-icon-1 rotate-180">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="black" />
									<path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="black" />
								</svg>
							</span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Aside toggler-->
                </div>
                <!--end::Brand-->
                <!--begin::Aside menu-->
                <div class="aside-menu flex-column-fluid">
                    <!--begin::Aside Menu-->
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
                        data-kt-scroll-offset="0">
                        <!--begin::Menu-->
                        <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
                            <div class="menu-item">
                                <div class="menu-content pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
                                </div>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link active" href="{{ route('admin') }}">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Board Analysis</span>
									</a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
													<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
													<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">New Notifications</span>
									</a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="black" />
													<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">New Applications</span>
									</a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/layouts/lay010.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H20C20.6 9 21 9.4 21 10V20C21 20.6 20.6 21 20 21Z" fill="black" />
													<path d="M20 7H3C2.4 7 2 6.6 2 6V3C2 2.4 2.4 2 3 2H20C20.6 2 21 2.4 21 3V6C21 6.6 20.6 7 20 7Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">New Complains</span>
									</a>
                            </div>
                            <div class="menu-item">
                                <a class="menu-link" href="">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
													<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
													<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Exam Results</span>
									</a>
                            </div>
                            
                             
                            
                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-2">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Users</span>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
													<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Admin</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">All Admins</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add New Admin</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Manage Admins</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blocked Admins</span>
											</a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
													<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
													<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Teachers</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ url('admin/all-teachers') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">All Teachers</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ url('admin/enroll-new-teacher') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add New Teacher</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Teacher Quaifications</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Reassign Subjects</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">New Teachers</span>
											</a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M22 7H2V11H22V7Z" fill="black" />
													<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Tutors</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('managetutors.index') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">All Tutors</span>
											</a>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Filter Tutors</span>
                                            </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Tutor Applications</span>
                                            </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Manage Tutors</span>
                                            </a>
                                    </div>
                                </div>
                                 
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M22 7H2V11H22V7Z" fill="black" />
													<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Parents/span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('manageparents.index') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">All Pupils</span>
											</a>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Filter Tutors</span>
                                            </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Tutor Applications</span>
                                            </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Manage Tutors</span>
                                            </a>
                                    </div>
                                </div>
                                 
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M22 7H2V11H22V7Z" fill="black" />
													<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Pupils</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="{{ route('managepupils.index') }}">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">All Pupils</span>
											</a>
                                    </div>
                                    
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Filter Tutors</span>
                                            </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">New Tutor Applications</span>
                                            </a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Manage Tutors</span>
                                            </a>
                                    </div>
                                </div>
                                 
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
													<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">User Management</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users List</span>
													</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View User</span>
													</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                        <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles List</span>
													</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Role</span>
													</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Permissions</span>
											</a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
													<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Support Center</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ</span>
											</a>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Suggestions</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Manage Suggestions</span>
													</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                        <span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Complains</span>
                                        <span class="menu-arrow"></span>
                                        </span>
                                        <div class="menu-sub menu-sub-accordion">
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">New Complains</span>
													</a>
                                            </div>
                                            <div class="menu-item">
                                                <a class="menu-link" href="">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Filter Complains</span>
													</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                   
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contact Us</span>
											</a>
                                    </div>
                                     
                                </div>
                            </div>
                             
                             
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
                                                    <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
                                                    <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
                                                </svg>
                                            </span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">School Calendar</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">All Events</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Add New Calendar</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Important Dates</span>
											</a>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
													<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
													<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">Chat</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Message Tutor</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Message Parent</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Message Teacher</span>
											</a>
                                    </div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="menu-content pt-8 pb-0">
                                    <span class="menu-section text-muted text-uppercase fs-8 ls-1">Others</span>
                                </div>
                            </div>
                            <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                <span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black" />
													<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black" />
												</svg>
											</span>
                                <!--end::Svg Icon-->
                                </span>
                                <span class="menu-title">About School</span>
                                <span class="menu-arrow"></span>
                                </span>
                                <div class="menu-sub menu-sub-accordion menu-active-bg">
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">School Motto</span>
											</a>
                                    </div>
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">School Mission</span>
											</a>
                                    </div>
                                   
                                    <div class="menu-item">
                                        <a class="menu-link" href="">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Rules & Regulations</span>
											</a>
                                    </div>
                                  
                                </div>
                            </div>
                           
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Aside Menu-->
                </div>
                <!--end::Aside menu-->
                <!--begin::Footer-->
                <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
                    <a href="{{ route('admin') }}" class="btn btn-custom btn-primary w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Admin Dashboard">
							<span class="btn-label">Admin Dashboard</span>
							<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
							<span class="svg-icon btn-icon svg-icon-2">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
									<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</a>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" style="" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2x mt-1">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <!--end::Aside mobile toggle-->
                        <!--begin::Mobile logo-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                            <a href="" class="d-lg-none">
									<img alt="Logo" src="{{ asset('assets/img/logo.png') }}" class="h-30px" />
								</a>
                        </div>
                        <!--end::Mobile logo-->
                        <!--begin::Wrapper-->
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <!--begin::Menu wrapper-->
                                <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end"
                                    data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <!--begin::Menu-->
                                    <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link active py-3" href="{{ route('admin')}}">
													<span class="menu-title">Dashboard</span>
												</a>
                                        </div>
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link  py-3" href="">
													<span class="menu-title">Teachers</span>
												</a>
                                        </div>
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link  py-3" href="">
													<span class="menu-title">Tutors</span>
												</a>
                                        </div>
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link  py-3" href="">
													<span class="menu-title">Parents</span>
												</a>
                                        </div>
                                        <div class="menu-item me-lg-1">
                                            <a class="menu-link  py-3" href="">
													<span class="menu-title">Students</span>
												</a>
                                        </div>
                                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                                            <span class="menu-link py-3">
													<span class="menu-title">Mega Menu</span>
                                            <span class="menu-arrow d-lg-none"></span>
                                            </span>
                                            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-600px p-5 p-lg-5">
                                                <!--begin:Row-->
                                                <div class="row" data-kt-menu-dismiss="true">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 border-left-lg-1">
                                                        <div class="menu-inline menu-column menu-active-bg">
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">All Teachers</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">All Tutors</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">All Parents</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">All Students</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">All Admins</span>
																	</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 border-left-lg-1">
                                                        <div class="menu-inline menu-column menu-active-bg">
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Manage Teachers</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Manage Tutors</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Manage Parents</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Manage Students</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Manage Admins</span>
																	</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Col-->
                                                    <!--begin:Col-->
                                                    <div class="col-lg-4 border-left-lg-1">
                                                        <div class="menu-inline menu-column menu-active-bg">
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Filter Teachers</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Filter Tutors</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Filter Parents</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Filter Students</span>
																	</a>
                                                            </div>
                                                            <div class="menu-item">
                                                                <a href="#" class="menu-link">
																		<span class="menu-bullet">
																			<span class="bullet bullet-dot"></span>
																		</span>
																		<span class="menu-title">Filter Admins</span>
																	</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Topbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Toolbar wrapper-->
                                <div class="d-flex align-items-stretch flex-shrink-0">
                                    <!--begin::Search-->
                                    <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                                        <!--begin::Search-->
                                        <div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true"
                                            data-kt-menu-placement="bottom-end">
                                            <!--begin::Search toggle-->
                                            <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                                    <span class="svg-icon svg-icon-1">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
															</svg>
														</span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                            </div>
                                            <!--end::Search toggle-->
                                            <!--begin::Menu-->
                                        
                                            <!--end::Menu-->
                                        </div>
                                        <!--end::Search-->
                                    </div>
                                    <!--end::Search-->
                                    <!--begin::Activities-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Drawer toggle-->
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_activities_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
														<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
														<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
														<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Drawer toggle-->
                                    </div>
                                    <!--end::Activities-->
                                    <!--begin::Notifications-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Menu- wrapper-->
                                        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
														<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
														<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
														<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--begin::Menu-->
                                      
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Notifications-->
                                    <!--begin::Chat-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Menu wrapper-->
                                        <div class="btn btn-icon btn-active-light-primary position-relative w-30px h-30px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
														<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
														<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->
                                            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                        </div>
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Chat-->
                                    <!--begin::Quick links-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                                        <!--begin::Menu wrapper-->
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
														<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--begin::Menu-->
                                      
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::Quick links-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                        <!--begin::Menu wrapper-->
                                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                            <img src="{{ asset('backend/assets/media/avatars/150-26.jpg') }}" alt="user" />
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content d-flex align-items-center px-3">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-50px me-5">
                                                        <img alt="Logo" src="{{ asset('backend/assets/media/avatars/150-26.jpg') }}" />
                                                    </div>
                                                    <!--end::Avatar-->
                                                    <!--begin::Username-->
                                                    <div class="d-flex flex-column">
                                                        <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                            <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
                                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                                    </div>
                                                    <!--end::Username-->
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="" class="menu-link px-5">My Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="" class="menu-link px-5">
														<span class="menu-text">Total Notifications</span>
														<span class="menu-badge">
															<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
														</span>
													</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                <a href="#" class="menu-link px-5">
														<span class="menu-title">Secure account</span>
														<span class="menu-arrow"></span>
													</a>
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="" class="menu-link px-5">Update Password</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="" class="menu-link px-5">Update Profile</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="" class="menu-link d-flex flex-stack px-5">System Backup 
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu separator-->
                                                    <div class="separator my-2"></div>
                                                    <!--end::Menu separator-->
                                                    <!--begin::Menu item-->
                                                   
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="" class="menu-link px-5">Password</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                        
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5 my-1">
                                                <a href="" class="menu-link px-5">Account Profile</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                
                                                <a class="menu-link px-5" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Sign Out') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                             
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu wrapper-->
                                    </div>
                                    <!--end::User -->
                                    <!--begin::Heaeder menu toggle-->
                                    <div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
                                        <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                                            <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                                            <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
														<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
													</svg>
												</span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Heaeder menu toggle-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Topbar-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                  @yield('content')
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2021©</span>
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">Roodito.com</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="" target="_blank" class="menu-link px-2">Support</a>
                            </li>
                            
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Drawers-->
  
    <!--end::Modal - Upgrade plan-->
    <!--end::Modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script>
        var hostUrl = "{{ asset('backend/assets/') }}";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{ asset('backend/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('backend/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/modals/create-app.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom/intro.js') }}"></script>
    <script src="{{ asset('backend/assets/css/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/assets/css/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <noscript>
			<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
    <!--End::Google Tag Manager (noscript) -->
    <script src="{{ asset('backend/assets/css/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/css/toastr.min.js') }}"></script>
    {!! Toastr::message() !!}
    @livewireScripts
</body>
<script>
	$(document).ready(function () {
	      $('#allrevisions').DataTable(); // ID From dataTable 
	      $('#currentorders').DataTable(); // ID From dataTable 
	      $('#revisionorders').DataTable(); // ID From dataTable 
	      $('#cancelledorders').DataTable(); // ID From dataTable 
	      $('#redudantorders').DataTable(); // ID From dataTable 
	      $('#alltransactions').DataTable(); // ID From dataTable 
	      $('#completedorders').DataTable(); // ID From dataTable 
	      $('#approvedorders').DataTable(); // ID From dataTable 
	    });
</script>
</html>
