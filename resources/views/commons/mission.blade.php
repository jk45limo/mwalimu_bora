<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Our MIssion</title>
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
    <link href="{{ asset('assets/css/mission.css') }}" rel="stylesheet">
    <!--Calendar-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/evo-calendar/css/evo-calendar.css') }}" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <a href="{{ url('/') }}" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li>
                        <a class="nav-link  active" href="{{ url('student-login')}}">Students</a>
                    </li>
                    <li><a class="nav-link" href="{{ url('teacher')}}">Teachers</a></li>
                    <li><a class="nav-link" href="{{ url('parent')}}">Parents</a></li>
                    <li><a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Exam Calendar</a></li>
                    <li><a class="nav-link" href="{{ url('filter-tutor') }}">Get Tutor</a></li>
                    <li><a class="nav-link" href="{{ url('student-login')}}">Log In</a></li>
                    <li><a class="nav-link" href="{{ url('student-register')}}">Sign Up</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->
            <a href="{{ url('student-login')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline"
                style="margin-right: 1rem;"></span>
            Login</a>
        <a href="{{ url('student-register')}}" class="appointment-btn scrollto">
            Sign Up</a>
        </div>
    </header>
    <!-- End Header -->
    <main id="main">
        <div class="mission-banner"> </div>
        <div class="mission-about row">
            <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                <h4>About Us</h4>
            </div>
            <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                <p>welcome to Roodito, the preferred examination preparation partner for millions of students in their primary, secondary and certificate studies in kenya and Greater Africa.</p>
            </div>
        </div>
        <div class="mission_contents">
            <div class="left_mission">
                <h4>Our Mission</h4>
                <p>To be dedicated in prociding you the very best of - </p>
                <ul>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Expert Instructors</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Develop meaningful content</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Latest Technology</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Student Personalization</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Dedicated Team</span></a></li>
                </ul>
            </div>
            <div class="right_mission">
                <h4>Our Core Values</h4>
                <p>Roodito aims to be embedded in every learning - </p>
                <ul>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Integrity</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Persuit of Excellence</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Teamwork / COllaboration</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Simplicity</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Management</span></a></li>
                    <li><a href=""><i class="far fa-check-circle"></i> <span>Innovation</span></a></li>
                </ul>
            </div>
        </div>
        <div class="mission-founders">
            <h3>The founders</h3>
            <div class="mission-founders-content">
                <div class="mission_founder">
                    <div class="mission_founder_img"></div>
                    <div class="mission_founder_name">
                        <h5>James Ndungu</h5>
                    </div>
                </div>
                <div class="mission_founder">
                    <div class="mission_founder_img"></div>
                    <div class="mission_founder_name">
                        <h5>Miller Musau</h5>
                    </div>
                </div>
                <div class="mission_founder">
                    <div class="mission_founder_img"></div>
                    <div class="mission_founder_name">
                        <h5>Jane Smith</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="mission-form" id="contact" name="contact">
            <div class="left-mission-form">
                <h3>Get in touch for any kind of information and help</h3>
                <p>We are gland to discus how we can help you improve your chil's perfomance</p>
                <div class="mission_divs">
                    <div class="mission_div">
                        <section>
                            <span><i class="fas fa-map-marker"></i></span>
                        </section>
                        <section>
                            <span>Kalson Tower, 7th Floor</span>
                        </section>
                    </div>
                    <div class="mission_div">
                        <section>
                            <span><i class="fas fa-phone-alt"></i></span>
                        </section>
                        <section>
                            <span>+254 (0) 757 897 277</span>
                        </section>
                    </div>
                    <div class="mission_div">
                        <section>
                            <span><i class="far fa-envelope"></i></span>
                        </section>
                        <section>
                            <span>app@roodito.com</span>
                        </section>
                    </div>
                </div>
            </div>
            <div class="right-mission-form">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Your Email</label>
                                <input type="text" class="form-control" placeholder="email@example@gmail.com">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <div class="form-outline mb-4">
                                <label for="">Message</label>
                                <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Type your message here"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                            Send
                          </button>
                        </div>
                </form>
                </div>
            </div>
            <!-- calendar  -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true" style="overflow-y: auto;">
                <div class="modal-dialog modal-xl">

                    <div class="modal-content">
                        <div class="modal-body" style="overflow-y: auto;">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="main-container">
                                        <section id="demos">
                                            <div class="section-content">
                                                <div class="console-log">
                                                    <div class="log-content">
                                                        <div class="--noshadow" id="demoEvoCalendar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="explore_courses">
                                        <div class="explore_course">
                                            <img src="./assets/img/Group -1.jpg" alt="" class="img-fluid">
                                            <div class="explore_course_desc">
                                                <div class="top_explore_course_desc">
                                                    <h3>Roodito Published Exams</h3>
                                                </div>
                                                <div class="bottom_explore_course_desc">
                                                    <section>
                                                        <span>20+ courses</span>
                                                    </section>
                                                    <section>
                                                        <a href="">Explore Courses</a>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="explore_course">
                                            <img src="./assets/img/Mask Group 12.jpg" alt="" class="img-fluid">
                                            <div class="explore_course_desc">
                                                <div class="top_explore_course_desc">
                                                    <h3>KNEC Exams</h3>
                                                </div>
                                                <div class="bottom_explore_course_desc">
                                                    <section>
                                                        <span>20+ courses</span>
                                                    </section>
                                                    <section>
                                                        <a href="">Explore Courses</a>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="explore_course">
                                            <img src="./assets/img/Mask Group 16.jpg" alt="" class="img-fluid">
                                            <div class="explore_course_desc">
                                                <div class="top_explore_course_desc">
                                                    <h3>Certificates</h3>
                                                </div>
                                                <div class="bottom_explore_course_desc">
                                                    <section>
                                                        <span>5+ courses</span>
                                                    </section>
                                                    <section>
                                                        <a href="">Explore Courses</a>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close Calendar</button>
                        </div>
                    </div>
                </div>
            </div>
    </main>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/evo-calendar/js/evo-calendar.min.js') }}"></script>
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
</body>

</html>
