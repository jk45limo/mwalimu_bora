<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/teacher-forms.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/toastr.min.css') }}">
    <!--Calendar-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/evo-calendar/css/evo-calendar.css') }}" />
    @livewireStyles
</head>

<body>


    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="{{ url('/') }}" class="logo me-auto"><img src="../assets/img/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li>
                        <a class="nav-link" href="{{ url('/')}}">Home</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ url('student-login') }}">Students</a>
                    </li>
                    <li><a class="nav-link active" href="{{ url('teachers/') }}">Teachers</a></li>
                    <li><a class="nav-link" href="{{ url('parent/') }}">Parents</a></li>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Exam Calendar</a></li>
                    <li><a class="nav-link" href="{{ url('filter-tutor')}}" target="_blank">Get Tutor</a></li>
                    <li><a class="nav-link" href="{{ url('teacher-login') }}">Log In</a></li>
                    <li><a class="nav-link" href="{{ url('teacher-register')}}">Sign Up</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a href="{{ url('teacher-login')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"
                style="margin-right: 1rem;"></span>
            Login</a>
        <a href="{{ url('teacher-register') }}" class="appointment-btn scrollto">
            Sign Up</a>

        </div>
    </header>
    <!-- End Header -->
    <main id="main">
      @yield('content')
   
    </main>
    @include('teachers.calendar')
    <!-- End #main -->
    <!-- ======= Footer ======= -->
   @include('layouts.footer')
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="{{ asset('backend/assets/css/jquery-3.6.0.min.js') }}"></script> 
    <script src="{{ asset('/assets/evo-calendar/js/evo-calendar.min.js') }}"></script>
    <script src="{{ asset('assets/demo/demo.js') }}"></script>
    <script>
        if ($(".text-slider").length == 1) {

            var typed_strings =
                $(".text-slider-items").text();

            var typed = new Typed(".text-slider", {
                strings: typed_strings.split(", "),
                typeSpeed: 50,
                loop: true,
                backDelay: 900,
                backSpeed: 30,
            });
        }
    </script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    </script>
      
      <script src="{{ asset('backend/assets/css/toastr.min.js') }}"></script>
      {!! Toastr::message() !!}
      @livewireScripts
</body>

</html>
