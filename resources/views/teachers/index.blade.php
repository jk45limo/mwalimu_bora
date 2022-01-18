@extends('teachers.teacher-layout')
@section('title','Teachers Homepage')
@section('content')
<div class="top-teacher"></div>
<div class="teacher-connect">
    <div class="top-teacher-connect">
        <span>Quick Connect</span>
        <h4>Connect in 5 min</h4>
        <p>Connecting with top quality teachers from ROODITO is as easy as</p>
    </div>
    <div class="bottom-teacher-connect">
        <div class="b-t-connect">
            <div class="top-b-t-connect">
                <h3>1</h3>
                <h5 class="top-change-check">Search</h5>
            </div>
            <div class="bottom-b-t-connect">
                <p>Search for the category / class</p>
            </div>
        </div>
        <div class="b-t-connect">
            <div class="top-b-t-connect">
                <h3>2</h3>
                <h5 class="top-change-position">Request <br> Trial Class</h5>
            </div>
            <div class="bottom-b-t-connect">
                <p>Choose from hundreds of top teachers and request them for a demo class</p>
            </div>
        </div>
        <div class="b-t-connect">
            <div class="top-b-t-connect">
                <h3>3</h3>
                <h5 class="top-change-check">Close</h5>
            </div>
            <div class="bottom-b-t-connect">
                <p>If you like the demo, continue with the teacher.</p>
            </div>
        </div>
    </div>
</div>
<div class="enroll-teacher">
    <div class="left-enroll-teacher"> </div>
    <div class="enroll-teacher-container">

        <div class="enroll-teacher-content-info">
            <h4>Become a ROODITO Teacher</h4>
            <div class="enroll-teacher-item">
                <h5>Teach Online</h5>
                <p>Teach online from the comfort of your home.</p>
            </div>
            <div class="enroll-teacher-item">
                <h5>No Upfront Payment</h5>
                <p>You do not spend unnecessary coins and compete with people on marketing skills. You pay only
                    when you have been selected by the parent.</p>
            </div>
            <div class="enroll-teacher-item">
                <h5>Quality Customers</h5>
                <p>Our top quality customers expect only top quality teachers. We as a platform ensures the
                    expectation is met for both sides.</p>
            </div>
            <div class="move-image-left">
                <img src="../assets/img/Mask Group 29@2x.jpg" alt="">
            </div>
            <div class="enroll-teacher-item">
                <a href="register.html" class="enroll-teacher-link">apply as a teacher</a>
                <a href="../tutor/register.html" class="enroll-teacher-link">apply as a tutor</a>
            </div>
        </div>

    </div>
</div>
<div class="delighted-customers">
    <span>Top Comments</span>
    <h4>Hear it from our delighted customers</h4>
</div>
<!-- ======= Testimonials Section ======= -->
<section id="teacher-testimonials" class="teacher-testimonials">

    <div class="teachers-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="top-testimonial-item">
                            <p>My son is improving in maths.. has been possible due to the excelent tutor
                                provided by Roodito.</p>
                        </div>
                        <div class="bottom-testimonial-item">
                            <div class="teacher-name">
                                <h4>Benson Wafula</h4>
                                <h6>Parent</h6>
                            </div>
                            <div class="teacher-img">
                                <img src="../assets/img/Mask Group 36.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="top-testimonial-item">
                            <p>It is a great experience to have taken Roodito service..i am looking forward to
                                taking honors for other subjects as well.</p>
                        </div>
                        <div class="bottom-testimonial-item">
                            <div class="teacher-name">
                                <h4>Benson Wafula</h4>
                                <h6>Tutor</h6>
                            </div>
                            <div class="teacher-img">
                                <img src="../assets/img/Mask Group 36.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End testimonial item -->

            <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="top-testimonial-item">
                            <p>Roodito have arranged an excellent hime tutor with in dept subject knowledge and
                                lots of patience. I am very happy with other tutors..</p>
                        </div>
                        <div class="bottom-testimonial-item">
                            <div class="teacher-name">
                                <h4>Benson Wafula</h4>
                                <h6>Teacher</h6>
                            </div>
                            <div class="teacher-img">
                                <img src="../assets/img/Mask Group 36.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End testimonial item -->
            <div class="swiper-slide">
                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <div class="top-testimonial-item">
                            <p>My son is improving in maths.. has been possible due to the excelent tutor
                                provided by Roodito.</p>
                        </div>
                        <div class="bottom-testimonial-item">
                            <div class="teacher-name">
                                <h4>Benson Wafula</h4>
                                <h6>Parent</h6>
                            </div>
                            <div class="teacher-img">
                                <img src="../assets/img/Mask Group 36.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End testimonial item -->


        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- End Testimonials Section -->
<!-- calendar  -->
@endsection
