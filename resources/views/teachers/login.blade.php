@extends('teachers.teacher-layout')
@section('title','Teacher Login')
@section('content')
<div class="teacher-form">
    <div class="teacher-form-img"></div>
    <div class="teacher-form-form">
        <form action="{{ route('login') }}" autocomplete="off" method="POST">
            @csrf
            <h3>Teacher Log In</h3>
            <p>Please log In to your account and start revising</p>
            <div class="form-wrap row">
                <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <label for="">Email</label>
                    <input type="text" class="input-field" name="email" placeholder="example@example@gmail.com">
                    @error('email')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <label for="">Password</label>
                    <input type="text" class="input-field" name="" placeholder="" name="password">
                    @error('password')
                        <span class="text-danger">{{$message }}</span>
                    @enderror
                </div>

                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 remember-login">
                    <div>
                        <input type="checkbox" name="" id=""> Remember Me?
                    </div>
                    <div>
                        <a href="{{ url('teacher-reset-password') }}">Forgot Password?</a>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <button class="form-next-button" type="submit">Sign In</button>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
                    <button class="form-next-button">Resend Verify Account?</button>
                </div>
                <p>Are you new to ROODITO? <a href="{{ url('teacher-register') }}">Create an Account</a></p>
            </div>
        </form>
    </div>
</div>
@endsection