@extends('commons.commons-layout')
@section('title', 'Frequently Asked Questions')
@section('content') 
    <div class="top-faqs"></div>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container">

            <div class="section-title">
                <h2>FAQ<small>s</small></h2>

            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">How do i onboard? <i
                                class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                            <p>
                                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What is the cost of accessing questions on Roodito ? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in
                                cursus turpis massa tincidunt dui.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Up to what levels are materials offered? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna
                                molestie at elementum eu facilisis sed odio morbi quis
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How do i top up my Roodito Wallet? <i class="bx bx-chevron-down icon-show"></i><i
                                class="bx bx-chevron-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
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

@endsection
