@extends('students.students-layout')
@section('title','Student Login')
@section('content')
<form action="{{ route('login') }}" method="POST" autocomplete="off">
    @csrf
    <h3>Student Log In</h3>
    <p>Please log In to your account and start revising</p>
    <div class="form-wrap row">
        <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
            <label for="">Email</label>
            <input type="text" class="input-field" placeholder="example@example@gmail.com" name="email">
            @error('email')
                <span class="text-danger">{{$message }}</span>
            @enderror
        </div>
        <div class="form-item col-lg-8 col-md-8 col-xs-12 col-sm-12">
            <label for="">Password</label>
            <input type="text" class="input-field" name="password" placeholder="" id="password">
            <i class="bi bi-eye-slash" id="togglePassword" style="margin-left: 90%;margin-top: -30px; cursor: pointer;"></i>
            @error('password')
            <span class="text-danger">{{$message }}</span>
        @enderror
        </div>

        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12 remember-login">
            <div>
                <input type="checkbox" name="" id=""> Remember Me?
            </div>
            <div>
                <a href="{{ url('student-forgot-password') }}">Forgot Password?</a>
            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-xs-12 col-sm-12">
            <button class="form-next-button" type="submit">Sign In</button>
        </div>
        <p>Are you new to ROODITO?? <a href="{{ url('student-register')}}">Create an Account</a></p>
    </div>
</form>
@endsection
