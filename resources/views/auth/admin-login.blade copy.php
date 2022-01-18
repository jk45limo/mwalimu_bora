<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <title>Roodito Admin Login Page</title>
    <meta charset="utf-8" />
    <meta name="description" content="School Management System" />
    <meta name="keywords" content="School, Management, Statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Roodito-  School Management System" />
    <meta property="og:url" content="https://roodito.com" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="https://roodito.com" />
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('backend/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <!--Begin::Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&amp;l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->

</head>

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Signup Free Trial-->
        <div class="d-flex flex-column flex-xl-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-fluid">
                <!--begin::Wrapper-->
                <div class="d-flex flex-row-fluid flex-center p-10">
                    <!--begin::Content-->
                    <div class="d-flex flex-column">
                        <!--begin::Logo-->
                        <a href="{{ url('/') }}" class="mb-15">
                            <img alt="Logo" src="{{ asset('assets/img/logo.png') }}" class="h-40px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="text-dark fs-2x mb-3">Welcome, Admin!</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <div class="fw-bold fs-4 text-gray-400 mb-10">Manage the users by accessing your dashboard from
                            here.</div>
                        <!--begin::Description-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Illustration-->
                <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-200px min-h-xl-450px mb-xl-10"
                    style="background-image: url(
                        {{
                        /* asset('public/backend/assets/media/illustrations/sketchy-1/1.png') */
                         /* }} */
                         )">
                </div>
                <!--end::Illustration-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid d-flex flex-center justfiy-content-xl-first p-10">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center p-15 shadow bg-body rounded w-100 w-md-550px mx-auto ms-xl-20">
                    <!--begin::Form-->
                    <form class="form" action="{{ route('login') }}" method="POST" autocomplete="off">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Admin Login</h1>
                            <!--end::Title-->

                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-bolder text-dark fs-6">Email</label>
                            <input class="form-control form-control-solid" type="email" placeholder="" name="email"
                                autocomplete="off" value="{{ old('email') }}" />
                            @error(' email') <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-7 fv-row">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-solid" type="password" placeholder=""
                                        name="password" autocomplete="off" />
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                    @error(' password') <small class="text-danger">{{ $message }}</small>
                                    @enderror

                                </div>
                                <!--end::Input wrapper-->

                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                                symbols.</div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group=-->

                        <!--end::Row-->
                        <!--begin::Row-->
                        <div class="text-center pb-lg-0 pb-8">
                            <button type="submit" class="btn btn-lg btn-primary fw-bolder">
                                <span class="indicator-label">Login Now</span>
                                {{-- <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span> --}}
                            </button>
                        </div>
                        <!--end::Row-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Right Content-->
        </div>
        <!--end::Authentication - Signup Free Trial-->
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "{{ asset('backend/assets/') }}";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('backend/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('backend/assets/js/custom/authentication/sign-up/free-trial.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
</body>
<!--end::Body-->

</html>
