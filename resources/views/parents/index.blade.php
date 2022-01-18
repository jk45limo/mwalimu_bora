@extends('parents.parent-layout')
@section('title', 'Homepage')
@section('content')
<div class="top-parent"> </div>
<div class="ignite-cultivate">
    <div class="left-ignite">
        <h4>Ignite and Cultivate</h4>
        <h6>Access and cultivate the learning <br> culture in every child.</h6>
    </div>
    <div class="right-ignite">
        <p>Roodito guides learners through all the required subjects. With the best tutors, Roodito is determined to provide the best e-learning resources for your learners. Through online test, get an insight of your child's academic perfomance.</p>
    </div>
</div>
<div class="bottom-banner">
    <div class="bottom-banner-content">
        <h5>Insightful assessment from <br> our experts</h5>
        <h5>Affordable e-learning resources <br> for your learners </h5>
        <h5>Build your child's confidence with <br> online test and expert instructions</h5>
        <h5>Lifetime access to educational <br> resources at your fingertips.</h5>
        <br>
        <a href="#" class="bottom-banner-link">Access Subjects</a>
        <div class="move_image_right">
            <img src="{{ asset('assets/img/Mask Group 28@2x.jpg')}}" alt="">
        </div>

    </div>
    <div class="last-bottom-banner"> </div>
</div>
@endsection